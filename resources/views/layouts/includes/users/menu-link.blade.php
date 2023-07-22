<ul class="row mr-2">
    <li class="user-menu col-sm-12 {{ Request::is('my-book') ? 'active-default' : '' }}">
        <a class="text-decoration-none" href="{{url('my-book')}}"> 
            <i class="fa fa-first-order" aria-hidden="true" style="font-size:18px;"></i>
            <span class="text-center"> Order</span>
        </a>
    </li>
    <li class="user-menu col-sm-12 {{ Request::is('my-profile') ? 'active-default' : 'text-dark' }}">
        <a class="text-decoration-none"  href="{{ url('my-profile') }}"> 
            <i class="fa fa-user" aria-hidden="true" style="font-size:18px;"></i>
            <span class="text-center"> My profile </span>
        </a>
    </li>
    <li class="user-menu col-sm-12 {{ Request::is('my-reviews') ? 'active-default' : '' }}">
        <a class="text-decoration-none" href="{{url('my-reviews')}}"> 
            <i class="fa fa-star" aria-hidden="true" style="font-size:18px;"></i>
            <span class="text-center"> My Reviews </span>
        </a>
    </li>
    <li class="user-menu col-sm-12">
        <a class="text-decoration-none" href="{{url('user/profile')}}"> 
            <i class="fa fa-star" aria-hidden="true" style="font-size:18px;"></i>
            <span class="text-center"> Change Password </span>
        </a>
    </li>
    
</ul>