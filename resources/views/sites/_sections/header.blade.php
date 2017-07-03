<header class="head" role="banner">
    <div class="wrap clearfix">
        <a href="index.html" title="SocialChef" class="logo"><img src="{{ asset('images/ok.png') }}" alt="SocialChef logo" style="margin-top: -29px;" /></a>
        <nav class="main-nav" role="navigation" id="menu">
            <ul>
                <li class="current-menu-item"><a href="index.html" title="Home"><span>{{ trans('sites.home') }}</span></a></li>
                <li>
                    <a href="recipes.html" title="Recipes"><span>{{ trans('sites.recipes') }}</span></a>
                    <ul>
                        <li><a href="recipes2.html" title="Recipes 2">{{ trans('sites.home') }}</a></li><li><a href="recipe.html" title="Recipe">Recipe</a></li>
                    </ul>
                </li>
                <li><a href="blog.html" title="Blog"><span>{{ trans('sites.blog') }}</span></a>
                    <ul>
                        <li><a href="blog_single.html" title="Blog post">{{ trans('sites.blogPost') }}</a></li>
                    </ul>
                </li>
                <li><a href="#" title="Pages"><span>{{ trans('sites.topChef') }}</span></a>
                    <ul>
                        <li><a href="left_sidebar.html" title="Left sidebar page"></a></li>
                    </ul>
                </li>
                <li><a href="contact.html" title="Contact"><span>{{ trans('sites.contact') }}</span></a></li>
            </ul>
        </nav>
        <nav class="user-nav" role="navigation">
            <ul>
                <li class="light"><a href="find_recipe.html" title="Search for recipes"><i class="ico i-search"></i> <span>{{ trans('sites.search') }}</span></a></li>
                <li class="medium"><a href="my_profile.html" title="My account"><i class="ico i-account"></i> <span>{{ trans('sites.myAccount') }}</span></a></li>
                <li class="dark"><a href="submit_recipe.html" title="Submit a recipe"><i class="ico i-submitrecipe"></i> <span>{{ trans('sites.submitRepice') }}</span></a></li>
            </ul>
        </nav>
    </div>
</header>
