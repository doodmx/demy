<div id="slide-out" class="side-nav fixed">
    <ul class="custom-scrollbar">

        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
            <div class="text-center">
                <a href="{{route('users.index')}}" class="pl-0">
                    <img src="https://cdn.demy.mx/img/logo_blanco.png" alt="Academy Logo"
                         class="d-block mx-auto"
                         style="width:80%;object-fit: cover; object-position: center;">
                </a>
            </div>
        </li>

        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                @include('layouts.admin.menu')
            </ul>
        </li>
        <!-- Side navigation links -->

    </ul>
    <div class="sidenav-bg mask-strong"></div>
</div>
