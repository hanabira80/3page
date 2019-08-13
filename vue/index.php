<!DOCTYPE html>
<html>
<head>
    <title>test</title>
    <meta http-equiv="Content-Type" content="charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- mobile setting -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!-- mobile setting end-->

    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    <style>
        div {
            margin:40px 40px;
        }
    </style>
</head>

<body>
<div id="app">
    <h1>Hello App!</h1>
    <p>
        <!-- use router-link component for navigation. -->
        <!-- specify the link by passing the `to` prop. -->
        <!-- <router-link> will be rendered as an `<a>` tag by default -->
        <router-link to="/foo">Go to Foo</router-link>
        <router-link to="/bar">Go to Bar</router-link>
    </p>
    <!-- route outlet -->
    <!-- component matched by the route will render here -->
    <router-view></router-view>
</div>
<script>
    // 0. If using a module system, call Vue.use(VueRouter)

    // 1. Define route components.
    // These can be imported from other files
    const Foo = { template: '<div>foo</div>' }
    const Bar = { template: '<div>bar</div>' }

    // 2. Define some routes
    // Each route should map to a component. The "component" can
    // either be an actual component constructor created via
    // Vue.extend(), or just a component options object.
    // We'll talk about nested routes later.
    const routes = [
        { path: '/foo', component: Foo },
        { path: '/bar', component: Bar }
    ]

    // 3. Create the router instance and pass the `routes` option
    // You can pass in additional options here, but let's
    // keep it simple for now.
    const router = new VueRouter({
        routes
    })

    // 4. Create and mount the root instance.
    // Make sure to inject the router with the router option to make the
    // whole app router-aware.
    const app = new Vue({
        router
    }).$mount('#app')

    // Now the app has started!
</script>
</body>
</html>