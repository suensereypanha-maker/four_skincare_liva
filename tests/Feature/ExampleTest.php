<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_application_returns_a_successful_response(): void
    {
        foreach (['/', '/product', '/about', '/contact', '/checkout'] as $uri) {
            $response = $this->get($uri);
            $response->assertStatus(200);
        }
    }

    public function test_header_uses_new_logo_and_footer_has_no_logo(): void
    {
        foreach (['/', '/product', '/about', '/contact'] as $uri) {
            $response = $this->get($uri);
            $response->assertStatus(200);
            $response->assertSee('images/logo.webp', false);
            $response->assertDontSee('images/logo.png', false);

            $html = $response->getContent();
            $footerPos = strpos($html, '<footer');
            $this->assertNotFalse($footerPos);
            $footerEndPos = strpos($html, '</footer>', $footerPos);
            $footerHtml = substr($html, $footerPos, $footerEndPos - $footerPos);

            $this->assertStringNotContainsString('logo.webp', $footerHtml);
            $this->assertStringNotContainsString('logo.png', $footerHtml);
            $this->assertStringNotContainsString('emp-brand__logo', $footerHtml);
        }

        $checkout = $this->get('/checkout');
        $checkout->assertStatus(200);
        $checkout->assertSee('images/logo.webp', false);
        $checkout->assertDontSee('images/logo.png', false);
    }

    public function test_product_page_has_telegram_instagram_facebook_share(): void
    {
        $response = $this->get('/product');
        $response->assertStatus(200);
        $response->assertSee('data-share-telegram', false);
        $response->assertSee('data-share-instagram', false);
        $response->assertSee('data-share-facebook', false);
        $response->assertSee('https://t.me/share/url', false);
        $response->assertSee('https://www.facebook.com/sharer/sharer.php', false);
    }

    public function test_khmer_and_english_language_switching_works(): void
    {
        $enHome = $this->get('/?lang=en');
        $enHome->assertStatus(200);
        $enHome->assertSee('<html lang="en">', false);
        $enHome->assertSee('Shop the sale');

        $switchKm = $this->from('/')->get('/lang/km');
        $switchKm->assertRedirect('/');
        $switchKm->assertSessionHas('locale', 'km');

        $kmHome = $this->withSession(['locale' => 'km'])->get('/');
        $kmHome->assertStatus(200);
        $kmHome->assertSee('<html lang="km">', false);
        $kmHome->assertSee('ទិញឥឡូវនេះ');

        $kmProduct = $this->withSession(['locale' => 'km'])->get('/product');
        $kmProduct->assertStatus(200);
        $kmProduct->assertSee('ចែករំលែកផលិតផល:');

        $kmCheckout = $this->withSession(['locale' => 'km'])->get('/checkout');
        $kmCheckout->assertStatus(200);
        $kmCheckout->assertSee('បញ្ជាទិញឥឡូវ');

        $switchEn = $this->from('/product')->get('/lang/en');
        $switchEn->assertRedirect('/product');
        $switchEn->assertSessionHas('locale', 'en');
    }

    public function test_translation_json_files_have_matching_keys(): void
    {
        $en = json_decode(file_get_contents(lang_path('en.json')), true);
        $km = json_decode(file_get_contents(lang_path('km.json')), true);

        $this->assertIsArray($en);
        $this->assertIsArray($km);
        $this->assertEmpty(array_diff_key($en, $km), 'Missing Khmer translation keys');
        $this->assertEmpty(array_diff_key($km, $en), 'Extra Khmer translation keys');
    }
}
