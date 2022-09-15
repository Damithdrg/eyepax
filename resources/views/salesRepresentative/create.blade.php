
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sales Representative') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="pb-8">
                        @if ($errors->any())
                            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                                Something went wrong...
                            </div>
                            <ul class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div class="block p-6 rounded-lg shadow-lg bg-white ">
                        <form 
                            action="{{ route('sales-representative.store') }}"
                            method="POST"
                            enctype="multipart/form-data">
                            @csrf
                          <div class="grid grid-cols-2 gap-4">
                            <div class="form-group mb-6">
                              <input type="text" class="form-control
                                block
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                                 placeholder="Full Name"
                                 name="name">
                            </div>
                            <div class="form-group mb-6">
                              <input type="tel" class="form-control
                                block
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                                 placeholder="Contact Number"
                                 name="contact_number">
                            </div>
                          </div>
                          <div class="form-group mb-6">
                            <input type="email" class="form-control block
                              w-full
                              px-3
                              py-1.5
                              text-base
                              font-normal
                              text-gray-700
                              bg-white bg-clip-padding
                              border border-solid border-gray-300
                              rounded
                              transition
                              ease-in-out
                              m-0
                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                              placeholder="Email address"
                              name="email">
                          </div>
                          <div class="form-group mb-6">
                            <input type="date" class="form-control block
                              w-full
                              px-3
                              py-1.5
                              text-base
                              font-normal
                              text-gray-700
                              bg-white bg-clip-padding
                              border border-solid border-gray-300
                              rounded
                              transition
                              ease-in-out
                              m-0
                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                              placeholder="Joined Date"
                              name="joined_date">
                          </div>
                          <div class="form-group mb-6">
                            <select name="route_id" x-model="route_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                @foreach ($workRoutes as $workRoute)
                                    <option value="{{ $workRoute->id }}">{{ $workRoute->name }}</option>
                                @endforeach
                                {{-- <option value="2">Student</option>
                                <option value="3">Teacher</option> --}}
                            </select>
                          </div>
                          <div class="form-group mb-6">
                              
                            <textarea
                                class="
                                  form-control
                                  block
                                  w-full
                                  px-3
                                  py-1.5
                                  text-base
                                  font-normal
                                  text-gray-700
                                  bg-white bg-clip-padding
                                  border border-solid border-gray-300
                                  rounded
                                  transition
                                  ease-in-out
                                  m-0
                                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                                "
                                rows="3"
                                placeholder="Your message"
                            ></textarea>
                          </div>
                          {{-- <div class="form-group form-check text-center mb-6">
                            <input type="checkbox"
                              class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                              id="exampleCheck25" checked>
                            <label class="form-check-label inline-block text-gray-800" for="exampleCheck25">Subscribe to our newsletter</label>
                          </div> --}}
                          <button type="submit" class="
                            w-full
                            px-6
                            py-2.5
                            bg-blue-600
                            text-white
                            font-medium
                            text-xs
                            leading-tight
                            uppercase
                            rounded
                            shadow-md
                            hover:bg-blue-700 hover:shadow-lg
                            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                            active:bg-blue-800 active:shadow-lg
                            transition
                            duration-150
                            ease-in-out">Create Sales Representative</button>
                        </form>
                      </div>



                    
                </div>
            </div>
        </div>
    </div>

</x-app-layout>