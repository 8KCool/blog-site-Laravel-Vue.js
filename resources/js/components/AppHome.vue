<template>
    <div>
    <toolbar></toolbar>
    <router-view></router-view>
    <!-- <app-footer></app-footer> -->
    <Footers></Footers>
    </div>
</template>

<script>
import Toolbar from './Toolbar';
import AppFooter from './AppFooter';
import Login from './Login/Login';
import Footers from './layouts/home/Footers';
export default {
    components: { Toolbar, AppFooter, Login, Footers }
}
</script>

<style>

</style>
