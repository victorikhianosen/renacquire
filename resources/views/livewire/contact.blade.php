<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <form class="space-y-6">

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-8 justify-start items-start">
            <div class="space-y-2 group">
                <label class="block text-gray" for="name">First Name</label>
                <div class="relative">
                    <input type="text" id="name" wire:model.live="first_name" required
                        class="w-full border-b-2 border-lightGray outline-none peer focus:ring-0" />
                    <div
                        class="absolute bottom-0 left-0 w-0 h-[2px] bg-primary transition-all duration-300 group-hover:w-full">
                    </div>
                </div>
                  @error('first_name')
                <span class="text-red-600 text-md italic">{{ $message }}</span>
            @enderror
            </div>

            <div class="space-y-2 group">
                <label class="block text-gray" for="name">Last Name</label>
                <div class="relative">
                    <input type="text" id="name" wire:model.live="last_name" required
                        class="w-full border-b-2 border-lightGray outline-none peer focus:ring-0" />
                    <div
                        class="absolute bottom-0 left-0 w-0 h-[2px] bg-primary transition-all duration-300 group-hover:w-full">
                    </div>
                </div>
                  @error('last_name')
                <span class="text-red-600 text-md italic">{{ $message }}</span>
            @enderror
            </div>
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-8 justify-start items-start">
            <div class="space-y-2 group">
                <label class="block text-gray" for="name">Email</label>
                <div class="relative">
                    <input type="text" id="name" wire:model.live="email" required
                        class="w-full border-b-2 border-lightGray outline-none peer focus:ring-0" />
                    <div
                        class="absolute bottom-0 left-0 w-0 h-[2px] bg-primary transition-all duration-300 group-hover:w-full">
                    </div>
                </div>
                  @error('email')
                <span class="text-red-600 text-md italic">{{ $message }}</span>
            @enderror
            </div>

            <div class="space-y-2 group">
                <label class="block text-gray" for="name">Phone</label>
                <div class="relative">
                    <input type="text" id="name" wire:model.live="phone" required
                        class="w-full border-b-2 border-lightGray outline-none peer focus:ring-0" />
                    <div
                        class="absolute bottom-0 left-0 w-0 h-[2px] bg-primary transition-all duration-300 group-hover:w-full">
                    </div>
                </div>
                @error('phone')
                    <span class="text-red-600 text-md italic">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="space-y-2 group pt-6">
            <label class="block text-gray" for="name">Message</label>
            <div class="relative">
                <input type="text" id="name" wire:model.live="message" required
                    class="w-full border-b-2 border-lightGray outline-none peer focus:ring-0" />
                <div
                    class="absolute bottom-0 left-0 w-0 h-[2px] bg-primary transition-all duration-300 group-hover:w-full">
                </div>
            </div>
            @error('message')
                <span class="text-red-600 text-md italic">{{ $message }}</span>
            @enderror
        </div>

        <div class="pt-6">
            <button wire:click.prevent="submitContact"
                class="py-4 px-10 text-lg bg-primary hover:opacity-90 text-white">
                Submit
            </button>
        </div>
    </form>
</div>
