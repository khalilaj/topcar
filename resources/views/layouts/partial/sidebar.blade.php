<div class="sidebar" data-color="purple" data-image="{{ asset('backend/img/sidebar-1.jpg') }}">

    <div class="logo">
        <a href="{{ route('welcome') }}" class="simple-text">
            Top Car
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::is('admin/dashboard*') ? 'active': '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/slider*') ? 'active': '' }}">
                <a href="{{ route('slider.index') }}">
                    <i class="material-icons">slideshow</i>
                    <p>Sliders</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/category*') ? 'active': '' }}">
                <a href="{{ route('category.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Categories</p>
                </a>
            </li>

            <li class="{{ Request::is('admin/car_category*') ? 'active': '' }}">
                <a href="{{ route('car_category.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Car Categories</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/car_for_sale*') ? 'active': '' }}">
                <a href="{{ route('car_for_sale.index') }}">
                    <i class="material-icons">vsr</i>
                    <p>Cars For Sale</p>
                </a>
            </li>
           
            <li class="{{ Request::is('admin/reservation*') ? 'active': '' }}">
                <a href="{{ route('reservation.index') }}">
                    <i class="material-icons">chrome_reader_mode</i>
                    <p>Reservations</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/contact*') ? 'active': '' }}">
                <a href="{{ route('contact.index') }}">
                    <i class="material-icons">message</i>
                    <p>Contact Message</p>
                </a>
            </li>

        </ul>
    </div>
</div>