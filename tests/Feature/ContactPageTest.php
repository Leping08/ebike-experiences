<?php

namespace Tests\Feature;

use App\Mail\ContactFormSubmitted;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactPageTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    // /**
    //  * A basic test example.
    //  *
    //  * @return void
    //  */
    // public function test_contact_page_loads()
    // {
    //     $response = $this->get(route('contact'));

    //     $response->assertStatus(200);
    // }

    // /**
    //  * It should have a form
    //  *
    //  * @return void
    //  */
    // public function test_contact_page_has_form()
    // {
    //     $response = $this->get(route('contact'));

    //     $response->assertSee('form');
    //     $response->assertSee('name');
    //     $response->assertSee('email');
    //     $response->assertSee('phone');
    //     $response->assertSee('message');
    // }

    // /**
    //  * It should have a name field
    //  *
    //  * @return void
    //  */
    // public function test_the_user_can_submit_the_form_with_valid_data()
    // {
    //     Mail::fake();

    //     $validData = [
    //         'name' => $this->faker->name,
    //         'email' => $this->faker->safeEmail(),
    //         'phone' => $this->faker->phoneNumber,
    //         'message' => $this->faker->sentence(10)
    //     ];

    //     $response = $this->post(route('contact.store'), $validData);

    //     $response->assertRedirect('/');
    //     $response->assertSessionHas('success');

    //     Mail::assertQueued(ContactFormSubmitted::class, function ($mail) use ($validData) {
    //         return $mail->data['name'] === $validData['name']
    //             && $mail->data['email'] === $validData['email']
    //             && $mail->data['phone'] === $validData['phone']
    //             && $mail->data['message'] === $validData['message'];
    //     });

    //     $this->assertDatabaseHas('contacts', $validData);
    // }
}
