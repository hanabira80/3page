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
    <script src="https://unpkg.com/vue"></script>
    <style>
        h1 {
            font-size:2rem;
        }
    </style>
</head>

<body>
<template>
    <div class="user">
        <h2>{{user.name}}</h2>
    </div>
</template>
<script>
    export default {
        name:'user',
        data(){
            return {
                user:{ name : 'Brad'}
            }
        }
    }
</script>
</body>
</html>