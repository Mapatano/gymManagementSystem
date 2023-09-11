<?php

use Tests\TestCase;
use App\Models\Clients;
use App\Models\Payment;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClientsControllerTest extends TestCase
{
    use DatabaseTransactions;

    public function testStoreMethod()
    {
        $data = [
            'First' => 'John',
            'Last' => 'Doe',
            'Email' => 'john.doe@example.com',
            'Phone' => '123456789',
            'amount' => 15000
        ];

        $response = $this->post(route('clients.store'), $data);

        $response->assertRedirect(route('members'));

        $client = Clients::where('Email', 'john.doe@example.com')->first();
        $this->assertNotNull($client);
        $this->assertEquals('John', $client->First_name);
        $this->assertEquals('Doe', $client->Last_Name);
        $this->assertEquals('123456789', $client->Phone);
        $this->assertEquals('2023-06-30 00:00:00', $client->Membership_ends);

        $payment = Payment::where('client_id', $client->id)->first();
        $this->assertNotNull($payment);
        $this->assertEquals(15000, $payment->amount);
    }
}

