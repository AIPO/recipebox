<template>
    <div class="container">
        <nav class="navbar is-transparent">
            <div class="navbar-brand">
                <router-link to="/" class="nav-item">Recipe box</router-link>
            </div>
            <div class="navbar-burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="navbar-menu">
                <router-link to="login" class="navbar-item">Login</router-link>

                <router-link to="register" class="navbar-item">Register</router-link>

                <router-link to="logout" class="navbar-item">Logout</router-link>


            </div>
        </nav>
        <router-view></router-view>
    </div>
</template>