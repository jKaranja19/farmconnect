<x-guest-layout>

  <form method="POST" action="/requestdelivery">
      @csrf
      <p>Thank you for your payment. Kindly take note of your transcation code as you will need it to make the delivery request</p>
        <div class="flex items-center justify-end ">
            

            <x-primary-button class="ml-4">
                {{ __('Click To Proceed to Delivery Request') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>