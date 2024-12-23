 <div class="col-span-3 space-y-10">
     <h3 class="text-xl font-semibold">Newsletter Signup</h3>
     <div class="pb-5 border-b-2 border-white w-fit">
         <form wire:submit.prevent="submitForm">
             <span><i class="fa-solid fa-envelope"></i></span>
             <input wire:model.live="email" type="text" placeholder="Enter Your Email Address"
                 class="bg-black placeholder:tracking-tighter text-white placeholder-gray-400 border-none rounded px-4 py-2 focus:outline-none focus:ring-0 focus:ring-none">
             <span><i class="fa-solid fa-arrow-right ml-4"></i></span>
             @error('email')
                 <span class="text-red-600 italic text-sm  block">{{ $message }}</span>
              @enderror
         </form>
     </div>
 </div>
