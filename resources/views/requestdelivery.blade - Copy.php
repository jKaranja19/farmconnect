<x-guest-layout>
    
    <form method="POST" action="">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Choose item for transportation')" />
            <select id="country" name="country" class="block mt-1 w-full rounded">
                <option value=""></option>
                <option value="organic">Tomatoes</option>
                <option value="fair-trade">Potatoes</option>
                <option value="non_gmo">Milk</option>
              
            </select>
        </div>

        <!-- Description -->
        <div>
            <x-input-label for="name" :value="__('Enter Pickup Location')" />
            <select id="country" name="country" class="block mt-1 w-full rounded">
                <option value=""></option>
                <option value="organic">Embu</option>
                <option value="fair-trade">Murang'a</option>
                <option value="non_gmo">Limuru</option>
              
            </select>
        </div>
  
       
       <!-- Price -->
       
       <div class="mt-4">
            <x-input-label for="price" :value="__('Input Quantity in Kgs/Litres')" />
            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required  />
            
        </div>

        <!-- Certification -->
        <div class="mt-4">
        <x-input-label for="certification" :value="__('Choose Available Delivery Truck')" />
         <div class="relative">
        
        <select id="country" name="country" class="block mt-1 w-full rounded">
                <option value=""></option>
                <option value="organic">Canter KDG 171H</option>
                <option value="fair-trade">Canter KAM 444Z</option>
                <option value="non_gmo">Isuzu Elf KBM 213D</option>
                <option value="gmo">GMO</option>
            </select>
    </div>
</div>

        <!-- Image -->
        <div class="mt-4">
            <x-input-label for="price" :value="__('Input Transaction Message')" />
            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required  />
            
        </div>

        <div class="flex items-center justify-end mt-4">
            

            <x-primary-button class="ml-4">
                {{ __('Request Delivery') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>