<x-dashboard.header />

    <!-- Main Content -->
    <div id="content">

        <x-dashboard.navbar />

        <div class="container-fluid">
            {{ $slot }}
        </div>
    </div>
    <!-- End of Main Content -->



    <x-dashboard.footer />
