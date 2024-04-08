@extends('components.layout')
@section('content')

<div class="flex flex-col items-center border-b bg-white py-4 sm:flex-row sm:px-10 lg:px-20 xl:px-32">
    <a href="/" class="text-2xl font-bold text-gray-800">Pavan SportsWear</a>

    
  </div>
  <div class="grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32">
    <div class="px-4 pt-8">
      <p class="text-xl font-medium">Order Summary</p>
      <p class="text-gray-400">Check your items. And select a suitable shipping method.</p>
      
      <div class="mt-8 space-y-3 rounded-lg border bg-white px-2 py-4 sm:px-6">
        @foreach ($cart as $item)
            <div class="flex flex-col rounded-lg bg-white sm:flex-row">
                <img class="m-2 h-24 w-28 rounded-md border object-cover object-center" src="/images/{{$item['slug']}}.png" alt="" />
                <div class="flex w-full flex-col px-4 py-4">
                    <span class="font-semibold">{{$item['name']}}</span>
                    {{-- <span class="float-right text-gray-400">42EU - 8.5US</span> --}}
                    <span class="float-right text-gray-400">Quantity: {{$item['quantity']}}</span>
                    <p class="text-lg font-bold">${{$item['price'] * $item['quantity']}}</p>
                    <!-- Form for removing the product -->
                    <form action="{{ route('remove.from.cart', $item['id'] ) }}" method="POST">
                      @csrf
                      
                      <button type="submit" 
                        class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 
                              font-medium rounded-lg text-sm px-2 py-1 text-center mt-2 me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white 
                              dark:hover:bg-red-600 dark:focus:ring-red-900">
                        Remove Item
                      </button>

                  </form>
                  
                </div>
            </div>
        @endforeach
        

        {{-- <div class="flex flex-col rounded-lg bg-white sm:flex-row">
          <img class="m-2 h-24 w-28 rounded-md border object-cover object-center" src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" />
          <div class="flex w-full flex-col px-4 py-4">
            <span class="font-semibold">Nike Air Max Pro 8888 - Super Light</span>
            <span class="float-right text-gray-400">42EU - 8.5US</span>
            <p class="mt-auto text-lg font-bold">$238.99</p>
          </div>
        </div> --}}

      </div>
  
      <p class="mt-8 text-lg font-medium">Shipping Methods</p>
      <form class="mt-5 grid gap-6">

        <div class="flex flex-col space-y-4">
          <input class="hidden" id="radio_1" type="radio" name="shipping_method" />
          <label class="relative cursor-pointer select-none rounded-lg border border-gray-300 p-4" for="radio_1">
            <span class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex w-full">
              <img class="w-14 object-contain" src="/images/dhl-logo.png" alt="" />
              <div class="ml-5">
                <span class="mt-2 font-semibold">DHL Delivery</span>
                <p class="text-slate-500 text-sm leading-6">Delivery: 2-4 Days</p>
              </div>
            </span>
          </label>
        
          <input class="hidden" id="radio_2" type="radio" name="shipping_method" />
          <label class="relative cursor-pointer select-none rounded-lg border border-gray-300 p-4" for="radio_2">
            <span class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex w-full">
              <img class="w-14 object-contain" src="/images/fedex-logo.png" alt="" />
              <div class="ml-5">
                <span class="mt-2 font-semibold">FedEx Delivery</span>
                <p class="text-slate-500 text-sm leading-6">Delivery: 1-3 Days</p>
              </div>
            </span>
          </label>
        </div>
        
        <style>
          #radio_1:checked + label {
            background-color: #3b82f6; /* Blue background color */
            color: #ffffff; /* White text color */
            border-color: #2c5282; /* Darker blue border color */
          }
        
          #radio_2:checked + label {
            background-color: #3b82f6; /* Blue background color */
            color: #ffffff; /* White text color */
            border-color: #1d4ed8; /* Darker blue border color */
          }
        </style>

        <p class="mt-2 text-sm font-light text-gray-500 dark:text-gray-400">
          Back to <a href="/" class="font-medium text-black hover:underline dark:text-primary-500">Home</a>
        </p>
        
        
        
        {{-- <div class="relative">
          <input class="peer hidden" id="radio_1" type="radio" name="radio" checked />
          <span class="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
          <label class="focus:bg-blue-500 hover:bg-blue-500 hover:text-white peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4" for="radio_1">
            <img class="w-14 object-contain" src="/images/dhl-logo.png" alt="" />
            <div class="ml-5">
              <span class="mt-2 font-semibold">DHL Delivery</span>
              <p class="text-slate-500 text-sm leading-6">Delivery: 2-4 Days</p>
            </div>
          </label>
        </div>
        <div class="relative">
          <input class="peer hidden" id="radio_2" type="radio" name="radio" checked />
          <span class="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
          <label class="hover:bg-blue-500 hover:text-white peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4" for="radio_2">
            <img class="w-14 object-contain" src="/images/fedex-logo.png" alt="" />
            <div class="ml-5">
              <span class="mt-2 font-semibold">Fedex Delivery</span>
              <p class="text-slate-500 text-sm leading-6">Delivery: 2-4 Days</p>
            </div>
          </label>
        </div> --}}
      </form>

    </div>

   
    
  
    <form action="{{route('payment.checkout')}}" method="POST">
    @csrf  
      <div class="mt-10 bg-white px-4 pt-8 lg:mt-0">
            <p class="text-xl font-medium">Payment Details</p>
            <p class="text-gray-400">Complete your order by providing your payment details.</p>

            
            
            <div class="">

              <label for="email" class="mt-4 mb-2 block text-sm font-medium">Email</label>
              <div class="relative">
                <input type="text" id="email" name="email" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="your.email@gmail.com" />
                <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                  </svg>
                </div>
              </div>

              <label for="card-holder" class="mt-4 mb-2 block text-sm font-medium">Card Holder</label>
              <div class="relative">
                <input type="text" id="card-holder" name="card-holder" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm  shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="Your full name here" />
                <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                  </svg>
                </div>
              </div>

              <label for="card-number" class="mt-4 mb-2 block text-sm font-medium">Card Details</label>
              <div class="flex">
                <div class="relative w-7/12 flex-shrink-0">
                  <input type="text" id="card-number" name="card-number" required class="w-full rounded-md border border-gray-200 px-2 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="xxxx-xxxx-xxxx-xxxx" />
                  <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                    <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z" />
                      <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z" />
                    </svg>
                  </div>
                </div>
                <label for="card-expiry"></label>
                <input type="text" name="card-expiry" id="card-expiry" required class="w-full rounded-md border border-gray-200 px-2 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="MM/YY" />
                <label for="card-cvc"></label>
                <input type="text" name="card-cvc" id="card-cvc" required class="w-1/6 flex-shrink-0 rounded-md border border-gray-200 px-2 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="CVC" />
                <input type="hidden" name="stripeToken" value="tok_visa">
              </div>

              {{-- Payment Test Information --}}
              <div id="alert-border-1" class=" flex items-center p-2 text-blue-800 border-t-4 border-blue-300 bg-blue-50 dark:text-blue-400 dark:bg-gray-800 dark:border-blue-800" role="alert">
                  
                <div class="ml-2 ms-3 text-sm font-medium">
                  <p class="">
                    <i>Use the following info to test out the payment:</i>
                  </p>
                  <p>
                    Card Number : <b>4242-4242-4242-4242</b> | Expiry Date : <b>12/34</b> | CVC : <b>333</b>
                  </p>
                  
                </div>    
              </div>

              <label for="billing-address" class="mt-4 mb-2 block text-sm font-medium">Billing Address</label>
              <div class="flex flex-col sm:flex-row">
                <div class="relative flex-shrink-0 sm:w-7/12">
                  <input type="text" id="billing-address" name="billing-address" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="Street Address" />
                  <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                    <svg class="h-6 w-6 text-gray-400 " fill="#c2c2c2" width="140px" height="140px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" stroke="#c2c2c2"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M49,18.92A23.74,23.74,0,0,0,25.27,42.77c0,16.48,17,31.59,22.23,35.59a2.45,2.45,0,0,0,3.12,0c5.24-4.12,22.1-19.11,22.1-35.59A23.74,23.74,0,0,0,49,18.92Zm0,33.71a10,10,0,1,1,10-10A10,10,0,0,1,49,52.63Z"></path></g></svg>
                    {{-- <img class="h-4 w-4 object-contain" src="https://flagpack.xyz/_nuxt/4c829b6c0131de7162790d2f897a90fd.svg" alt="" /> --}}
                  </div>
                </div>
                
                <input type="text" name="billing-zip" class="flex-shrink-0 rounded-md border border-gray-200 px-4 py-3 text-sm shadow-sm outline-none sm:w-1/6 focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="ZIP" />
              </div>

              
              <div class="mt-6 border-t border-b py-2">
                <div class="flex items-center justify-between">
                  <p class="text-sm font-medium text-gray-900">Subtotal</p>
                  <?php $total = 0; ?>
                  @foreach(session('cart', []) as $item)
    
                      <?php $subtotal = $item['price'] * $item['quantity']; ?>
                      <?php $total += $subtotal; ?>
                  @endforeach
                  <p class="font-semibold text-gray-900">${{$total ?? 0}}</p>
                </div>
                <div class="flex items-center justify-between">
                  <p class="text-sm font-medium text-gray-900">Shipping</p>
                  <p class="font-semibold text-gray-900">$8.00</p>
                </div>
              </div>
              <div class="mt-2 flex items-center justify-between">
                <p class="text-sm font-medium text-gray-900">Total</p>
                <p class="text-2xl font-semibold text-gray-900">${{$total + 8}}</p>
              </div>
            </div>
              <button type="submit" class="hover:bg-gray-700 mt-4 mb-8 w-full rounded-md bg-gray-900 px-6 py-3 font-medium text-white">Place Order</button>
          </div>
    </form>

    
  </div>

        {{-- Form for Stripe --}}
        {{-- <form action="{{ route('payment.checkout') }}" method="post">
          @csrf
          <label for="card-number">Card Number:</label>
          <input type="text" id="card-number" name="card-number" placeholder="1234 5678 9012 3456" required>
      
          <label for="card-expiry">Card Expiry:</label>
          <input type="text" id="card-expiry" name="card-expiry" placeholder="MM/YY" required>
      
          <label for="card-cvc">Card CVC:</label>
          <input type="text" id="card-cvc" name="card-cvc" placeholder="123" required>

          <input type="hidden" name="stripeToken" value="tok_visa">

      
          <button type="submit">Submit Payment</button>
      </form> --}}
      
  
        <!-- Total -->

@endsection
    
    
