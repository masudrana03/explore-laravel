@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>


    <p>oi shoriful bhai ei dekhan miya shopify blade file diya load hoisay.</p>
@endsection

@section('scripts')
    @parent

    <script type="text/javascript">
     


        var AppBridge = window['app-bridge'];
        var actions = AppBridge.actions;
        var TitleBar = actions.TitleBar;
        var Button = actions.Button;
        var Redirect = actions.Redirect;
        var titleBarOptions = {
            title: 'welcome'
        };






        var createApp = AppBridge.default;
        var NavigationMenu = actions.NavigationMenu;
        var AppLink = actions.AppLink;



        // create AppLink
        const itemsLink = AppLink.create(app, {
            label: 'Items',
            destination: '/items',
        });
        const settingsLink = AppLink.create(app, {
            label: 'Settings',
            destination: '/service_callback',
        });

        // create NavigationMenu with no active links
        const navigationMenu = NavigationMenu.create(app, {
            items: [itemsLink, settingsLink],
            active: itemsLink,
        });
    </script>
@endsection
