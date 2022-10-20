<div class="bg-green-700 text-gray-100 ">
    			<div class="px-20 py-7 flex justify-between">
        			<div class="">
            				<a href="/" class=""><span class="uppercase font-black text-2xl">Book Store</span></a> 
        			</div>
        			<div class="space-x-4 flex font-semibold">
                        
                        
                        @guest
                            <div class="">
                                <a href="{{ route('login') }}" class="">Connexion</a>
                            </div>
                            <div class="">
                                <a href="{{ route('register') }}" class="">Inscription</a>
                            </div>
                        @endguest
                        
                        @auth
                            <div class="">
                                <a href="{{route('dashboard')}}" class="">Dashboard</a>
                            </div>
                            <div class="">
                                <x-btn-logout/>
                            </div>    
                        @endauth
                    </div>
    			</div>
		</div>