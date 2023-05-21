<x-main>    
    <header class="bg-dark py-5">
                <div class="container px-4 px-lg-5 my-5">
                    <div class="text-center text-white">
                        <h1 class="display-4 fw-bolder">Gold Gym</h1>
                        <img src="https://milanobeatradio.it/wp-content/uploads/2021/06/Golds-gym-.jpg">
                        <p class="lead fw-normal text-white-50 mb-0"></p>
                    </div>
                </div>
            </header>
            @if (session('succes'))
        <div>
            {{session('succes')}}
        </div>    
        @endif
            <!-- Footer-->
            <footer class="py-5 bg-dark">
                <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
            </footer>
</x-main>
