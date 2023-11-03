<ul class="rd-navbar-nav">
    <li class="active"><a href="{{ route('home') }}">Home</a></li>
    <li><a href="javascript:void()" title="All Projects">All Projects</a>
        <ul class="rd-navbar-dropdown">
            @foreach ($project_types as $type)
                <li>
                    <a href="{{ route('project-type', $type) }}" title="{{ $type->name }}">{{ $type->name }}</a>
                </li>
            @endforeach
        </ul>
    </li>
    <li>
        <a href="javascript:void()">Buy/Sale</a>
        <ul class="rd-navbar-dropdown">
            <li><a href="{{ route('land-wanted') }}" title="Land Wanted">Land Wanted</a></li>
            <li><a href="{{ route('flat-buy-sale') }}" title="Flat Buy/Sale">Flat Buy/Sale</a>
        </ul>
    </li>
    <li> <a href="{{ route('contact-us') }}" title="About US" class="nav-link">Contact US</a> </li>
    <li> <a href="{{ route('about-us') }}" title="About US" class="nav-link">About US</a> </li>
    <li> <a href="{{ route('term-of-use') }}" title="About US" class="nav-link">Term of use</a> </li>
    <li> <a href="{{ route('message-from-md') }}" title="About US" class="nav-link">Message from md</a> </li>

    <li class="rd-navbar-bottom-panel">
        <div class="rd-navbar-bottom-panel-wrap">

            <div class="top-panel-inner">
                <dl class="dl-horizontal-mod-1">
                    <dt><span class="icon-xxs-mod-2 material-icons-local_phone"></span>
                    </dt>
                    <dd><a href="tel://01988806470"> 01988806470</a></dd>
                </dl>
                <dl class="dl-horizontal-mod-1">
                    <dt><span class="material-icons-drafts icon-xxs-mod-2"></span></dt>
                    <dd><a href="mailto://assortproperties@gmail.com">assortproperties@gmail.com</a></dd>
                </dl>
                <address>
                    <dl class="dl-horizontal-mod-1">
                        <dt>&nbsp; </dt>
                        <dd><a class="inset-11" href="#">House-262/1 (3rd floor), Road No-10/A,West
                                Dhanmondi,Dhaka-120</a></dd>
                    </dl>
                </address>
            </div>
            <ul class="list-inline text-center">
                <li><a class="fa-facebook" href="#"></a></li>
                <li><a class="fa-twitter" href="#"></a></li>
                <li><a class="fa-pinterest-p" href="#"></a></li>
            </ul>
        </div>
    </li>
</ul>
