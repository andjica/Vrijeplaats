@extends('layouts.app')

@section('content')
<div class="container">
<ul class="breadcrumb breadcrumb-style-02 py-7">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item">Sidebar Listing - Grid View</li>
</ul>
<div class="page-container row">
<div class="sidebar col-lg-4 order-1 order-lg-0 mb-8 mb-lg-0">
<div class="card rounded-0 mb-6 map p-0">
<div id="googleMap" data-google-map="true" class="small-map" style="width: 100%; height: 179px; position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div><button draggable="false" aria-label="Keyboard shortcuts" title="Keyboard shortcuts" type="button" style="background: none transparent; display: block; border: none; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; z-index: 1000002; left: -100000px; top: -100000px;"></button></div><div tabindex="0" aria-label="Map" aria-roledescription="map" role="group" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -136, -69);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -136, -69);"><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1207!3i1538!4i256!2m3!1e0!2sm!3i578303992!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MTh8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxOHxzLmU6bC50LmZ8cC5jOiNmZmMzYjZhMixzLnQ6ODF8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo4MXxzLmU6bC50fHAuYzojZmZjM2I2YTIscy50OjgxfHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo4MnxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjEzMTN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxMzE0fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MzN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo0MHxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjQwfHMuZTpsLml8cC5jOiNmZjgwODA4MCxzLnQ6NDB8cy5lOmwudC5mfHAuYzojZmY4MDgwODAscy50OjM1fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDo1MHxzLmU6Zy5zfHAuYzojZmZjMGMwYzB8cC5zOi03NXxwLmw6LTgwLHMudDo1MHxzLmU6bHxwLnY6b2ZmLHMudDo0OXxzLmU6Zy5mfHAuYzojZmZlZGVkZWQscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmVkZWRlZCxzLnQ6NDl8cy5lOmx8cC52Om9mZixzLnQ6NDl8cy5lOmwudHxwLmM6I2ZmZWRlZGVkLHMudDo0OXxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNSxzLnQ6Nzg1fHAuYzojZmZlZGVkZWQscy50OjUxfHAudjpvZmYscy50OjUxfHMuZTpnLmZ8cC5jOiNmZmVkZWRlZCxzLnQ6NjV8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDoxMDU5fHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo2fHMuZTpnLmZ8cC5jOiNmZmM3ZDdkNCxzLnQ6NnxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNQ!4e0!5m1!5f2&amp;key=AIzaSyDiMIj9qJw-InawUWnu7kUK4GjDQ7dktMQ&amp;token=10656" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1206!3i1538!4i256!2m3!1e0!2sm!3i578303992!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MTh8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxOHxzLmU6bC50LmZ8cC5jOiNmZmMzYjZhMixzLnQ6ODF8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo4MXxzLmU6bC50fHAuYzojZmZjM2I2YTIscy50OjgxfHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo4MnxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjEzMTN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxMzE0fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MzN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo0MHxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjQwfHMuZTpsLml8cC5jOiNmZjgwODA4MCxzLnQ6NDB8cy5lOmwudC5mfHAuYzojZmY4MDgwODAscy50OjM1fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDo1MHxzLmU6Zy5zfHAuYzojZmZjMGMwYzB8cC5zOi03NXxwLmw6LTgwLHMudDo1MHxzLmU6bHxwLnY6b2ZmLHMudDo0OXxzLmU6Zy5mfHAuYzojZmZlZGVkZWQscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmVkZWRlZCxzLnQ6NDl8cy5lOmx8cC52Om9mZixzLnQ6NDl8cy5lOmwudHxwLmM6I2ZmZWRlZGVkLHMudDo0OXxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNSxzLnQ6Nzg1fHAuYzojZmZlZGVkZWQscy50OjUxfHAudjpvZmYscy50OjUxfHMuZTpnLmZ8cC5jOiNmZmVkZWRlZCxzLnQ6NjV8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDoxMDU5fHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo2fHMuZTpnLmZ8cC5jOiNmZmM3ZDdkNCxzLnQ6NnxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNQ!4e0!5m1!5f2&amp;key=AIzaSyDiMIj9qJw-InawUWnu7kUK4GjDQ7dktMQ&amp;token=108827" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1205!3i1539!4i256!2m3!1e0!2sm!3i578303992!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MTh8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxOHxzLmU6bC50LmZ8cC5jOiNmZmMzYjZhMixzLnQ6ODF8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo4MXxzLmU6bC50fHAuYzojZmZjM2I2YTIscy50OjgxfHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo4MnxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjEzMTN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxMzE0fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MzN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo0MHxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjQwfHMuZTpsLml8cC5jOiNmZjgwODA4MCxzLnQ6NDB8cy5lOmwudC5mfHAuYzojZmY4MDgwODAscy50OjM1fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDo1MHxzLmU6Zy5zfHAuYzojZmZjMGMwYzB8cC5zOi03NXxwLmw6LTgwLHMudDo1MHxzLmU6bHxwLnY6b2ZmLHMudDo0OXxzLmU6Zy5mfHAuYzojZmZlZGVkZWQscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmVkZWRlZCxzLnQ6NDl8cy5lOmx8cC52Om9mZixzLnQ6NDl8cy5lOmwudHxwLmM6I2ZmZWRlZGVkLHMudDo0OXxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNSxzLnQ6Nzg1fHAuYzojZmZlZGVkZWQscy50OjUxfHAudjpvZmYscy50OjUxfHMuZTpnLmZ8cC5jOiNmZmVkZWRlZCxzLnQ6NjV8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDoxMDU5fHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo2fHMuZTpnLmZ8cC5jOiNmZmM3ZDdkNCxzLnQ6NnxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNQ!4e0!5m1!5f2&amp;key=AIzaSyDiMIj9qJw-InawUWnu7kUK4GjDQ7dktMQ&amp;token=114334" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1206!3i1539!4i256!2m3!1e0!2sm!3i578303992!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MTh8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxOHxzLmU6bC50LmZ8cC5jOiNmZmMzYjZhMixzLnQ6ODF8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo4MXxzLmU6bC50fHAuYzojZmZjM2I2YTIscy50OjgxfHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo4MnxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjEzMTN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxMzE0fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MzN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo0MHxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjQwfHMuZTpsLml8cC5jOiNmZjgwODA4MCxzLnQ6NDB8cy5lOmwudC5mfHAuYzojZmY4MDgwODAscy50OjM1fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDo1MHxzLmU6Zy5zfHAuYzojZmZjMGMwYzB8cC5zOi03NXxwLmw6LTgwLHMudDo1MHxzLmU6bHxwLnY6b2ZmLHMudDo0OXxzLmU6Zy5mfHAuYzojZmZlZGVkZWQscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmVkZWRlZCxzLnQ6NDl8cy5lOmx8cC52Om9mZixzLnQ6NDl8cy5lOmwudHxwLmM6I2ZmZWRlZGVkLHMudDo0OXxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNSxzLnQ6Nzg1fHAuYzojZmZlZGVkZWQscy50OjUxfHAudjpvZmYscy50OjUxfHMuZTpnLmZ8cC5jOiNmZmVkZWRlZCxzLnQ6NjV8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDoxMDU5fHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo2fHMuZTpnLmZ8cC5jOiNmZmM3ZDdkNCxzLnQ6NnxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNQ!4e0!5m1!5f2&amp;key=AIzaSyDiMIj9qJw-InawUWnu7kUK4GjDQ7dktMQ&amp;token=16163" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1207!3i1539!4i256!2m3!1e0!2sm!3i578303992!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MTh8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxOHxzLmU6bC50LmZ8cC5jOiNmZmMzYjZhMixzLnQ6ODF8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo4MXxzLmU6bC50fHAuYzojZmZjM2I2YTIscy50OjgxfHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo4MnxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjEzMTN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxMzE0fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MzN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo0MHxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjQwfHMuZTpsLml8cC5jOiNmZjgwODA4MCxzLnQ6NDB8cy5lOmwudC5mfHAuYzojZmY4MDgwODAscy50OjM1fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDo1MHxzLmU6Zy5zfHAuYzojZmZjMGMwYzB8cC5zOi03NXxwLmw6LTgwLHMudDo1MHxzLmU6bHxwLnY6b2ZmLHMudDo0OXxzLmU6Zy5mfHAuYzojZmZlZGVkZWQscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmVkZWRlZCxzLnQ6NDl8cy5lOmx8cC52Om9mZixzLnQ6NDl8cy5lOmwudHxwLmM6I2ZmZWRlZGVkLHMudDo0OXxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNSxzLnQ6Nzg1fHAuYzojZmZlZGVkZWQscy50OjUxfHAudjpvZmYscy50OjUxfHMuZTpnLmZ8cC5jOiNmZmVkZWRlZCxzLnQ6NjV8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDoxMDU5fHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo2fHMuZTpnLmZ8cC5jOiNmZmM3ZDdkNCxzLnQ6NnxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNQ!4e0!5m1!5f2&amp;key=AIzaSyDiMIj9qJw-InawUWnu7kUK4GjDQ7dktMQ&amp;token=49063" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1205!3i1538!4i256!2m3!1e0!2sm!3i578303992!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MTh8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxOHxzLmU6bC50LmZ8cC5jOiNmZmMzYjZhMixzLnQ6ODF8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo4MXxzLmU6bC50fHAuYzojZmZjM2I2YTIscy50OjgxfHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo4MnxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjEzMTN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDoxMzE0fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6MzN8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo0MHxzLmU6Zy5mfHAuYzojZmZmZmZmZmYscy50OjQwfHMuZTpsLml8cC5jOiNmZjgwODA4MCxzLnQ6NDB8cy5lOmwudC5mfHAuYzojZmY4MDgwODAscy50OjM1fHMuZTpnLmZ8cC5jOiNmZmZmZmZmZixzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDo1MHxzLmU6Zy5zfHAuYzojZmZjMGMwYzB8cC5zOi03NXxwLmw6LTgwLHMudDo1MHxzLmU6bHxwLnY6b2ZmLHMudDo0OXxzLmU6Zy5mfHAuYzojZmZlZGVkZWQscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmVkZWRlZCxzLnQ6NDl8cy5lOmx8cC52Om9mZixzLnQ6NDl8cy5lOmwudHxwLmM6I2ZmZWRlZGVkLHMudDo0OXxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNSxzLnQ6Nzg1fHAuYzojZmZlZGVkZWQscy50OjUxfHAudjpvZmYscy50OjUxfHMuZTpnLmZ8cC5jOiNmZmVkZWRlZCxzLnQ6NjV8cy5lOmcuZnxwLmM6I2ZmZjBmMGYwLHMudDoxMDU5fHMuZTpsLnQuZnxwLmM6I2ZmYzNiNmEyLHMudDo2fHMuZTpnLmZ8cC5jOiNmZmM3ZDdkNCxzLnQ6NnxzLmU6bC50LmZ8cC5jOiNmZjkxYmJkNQ!4e0!5m1!5f2&amp;key=AIzaSyDiMIj9qJw-InawUWnu7kUK4GjDQ7dktMQ&amp;token=75927" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div class="gm-style-moc" style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0; transition-duration: 0.8s;"><p class="gm-style-mot">Use ctrl + scroll to zoom the map</p></div></div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe><div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div><div></div><div></div><div></div><div></div><div><button draggable="false" aria-label="Toggle fullscreen view" title="Toggle fullscreen view" type="button" style="background: none rgb(255, 255, 255); display: none; border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px;"></button></div><div></div><div></div><div></div><div></div><div></div><div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=40.762529,-73.957334&amp;z=12&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Open this area in Google Maps (opens a new window)" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div></div><div></div><div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 183px; bottom: 0px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><button draggable="false" aria-label="Keyboard shortcuts" title="Keyboard shortcuts" type="button" style="background: none; display: inline-block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: normal;">Keyboard shortcuts</button></div></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 68px; bottom: 0px; width: 115px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><button draggable="false" aria-label="Map Data" title="Map Data" type="button" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: normal;">Map Data</button><span>Map data ©2021 Google</span></div></div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Terms of Use</a></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2021 Google</div></div></div></div></div></div>
<div class="map-content">
<a href="#" class="btn btn-primary btn-icon-left font-size-md px-5 lh-18"><i class="fas fa-map-marker-alt"></i>See
On Map</a>
</div>
</div>
<div class="card search bg-white mb-6 border-0 rounded-0 px-6">
<div class="card-header bg-transparent border-0 pt-4 pb-0 px-0">
<h5 class="card-title mb-0">Search</h5>
</div>
<div class="card-body px-0 pb-42">
<div class="form-search form-search-style-03">
<div class="form-group">
<div class="input-group d-flex align-items-center">
<label for="what" class="input-group-prepend text-dark font-weight-semibold">What</label>
<input type="text" class="form-control bg-transparent" id="what" placeholder="Any keywords...">
</div>
</div>
<div class="form-group">
<div class="input-group d-flex align-items-center">
<label for="where" class="input-group-prepend text-dark font-weight-semibold">Where</label>
<input type="text" class="form-control bg-transparent" id="where" placeholder="City, postcode...">
</div>
</div>
<button type="submit" class="btn btn-primary btn-block btn-icon-left font-size-md">
<i class="fa fa-search"></i>
Search
</button>
</div>
</div>
</div>
<div class="card widget-filter bg-white mb-6 border-0 rounded-0 px-6">
<div class="card-header bg-transparent border-0 pt-4 pb-0 px-0">
<h5 class="card-title mb-0">Filter</h5>
</div>
<div class="card-body px-0">
<div class="form-filter">
<form>
<div class="form-group category">
<div class="select-custom">
<select class="form-control">
<option value="0">Categories</option>
<option value="1">New York</option>
<option value="1">LA</option>
</select>
</div>
</div>
<div class="form-group price-range">
<label class="form-label">
Price Range
</label>
<div id="price" data-slider="true" data-slider-options="{&quot;min&quot;:0,&quot;max&quot;:4000,&quot;values&quot;:[0,2000]}" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 50%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 50%;"></span></div>
<div class="description">
From <input type="text" readonly="" class="amount border-0">
</div>
</div>
<div class="form-group">
<div class="input-group">
<input type="text" value="Open Now" class="form-control bg-transparent">
<span class="input-group-append"><i class="fa fa-clock"></i></span>
</div>
</div>
<div class="form-group">
<div class="input-group">
<input type="text" value="Highest Rated" class="form-control bg-transparent">
<span class="input-group-append"><i class="fas fa-star"></i></span>
</div>
</div>
<div class="form-group">
<div class="input-group">
<input type="text" value="Most Reviewed" class="form-control bg-transparent">
<span class="input-group-append"><i class="fa fa-comment"></i></span>
</div>
</div>

</form>
</div>
</div>
</div>
<div class="campaign">
<img src="images/other/campaign.jpg" alt="Campaign">
</div>
</div>
<div class="page-content col-12 col-lg-8 order-0 order-lg-1 mb-8 mb-lg-0">
<div class="explore-filter d-lg-flex align-items-center d-block">
<div class="text-dark font-weight-semibold font-size-md mb-4 mb-lg-0">56 Results found</div>
<div class="form-filter d-flex align-items-center ml-auto">
<div class="form-group row no-gutters align-items-center">
<label for="sort-by" class="col-sm-3 text-dark font-size-md font-weight-semibold mb-0">Sort
by</label>
<div class="select-custom col-sm-9 bg-white">
<select id="sort-by" class="form-control bg-transparent">
<option value="0">Latest</option>
<option value="1">New York</option>
<option value="1">LA</option>
</select>
</div>
</div>
<div class="format-listing ml-auto">
<a href="#" class="active"><i class="fas fa-th"></i></a>
<a href="explore-sidebar-list.html"><i class="fa fa-bars"></i></a>
</div>
</div>
</div>
<div class="row equal-height">
<div class="col-lg-6 mb-6">
<div class="store card border-0 rounded-0">
<div class="position-relative store-image">
<a href="listing-details-full-image.html">
<img src="images/shop/popular-place-2.jpg" alt="store 1" class="card-img-top rounded-0">
</a>
<div class="image-content position-absolute d-flex align-items-center">
<div class="content-right ml-auto d-flex">
<a href="images/shop/full-popular-place-2.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="" data-gtf-mfp="true" data-original-title="Quick view">
<svg class="icon icon-expand">
<use xlink:href="#icon-expand"></use>
</svg>
</a>
<a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><i class="fa fa-bookmark"></i></a>
</div>
</div>
</div>
<div class="card-body pb-4">
<a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Fruit Cake - Halsey St </span></a>
<ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
<li class="list-inline-item"><span class="badge badge-success mr-1 d-inline-block">4.8</span><span class="number">2 rating</span>
</li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$4.0</span></li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="text-green">Open now!</span></li>
</ul>
<div class="media">
<a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
</a>
<div class="media-body lh-14 font-size-sm">They specialize in makgeolli at
this
Korean-style pub in Seorae Village. And they use...
</div>
</div>
</div>
<div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent">
<div class="border-top pt-3">
<span class="d-inline-block mr-1"><i class="fas fa-location-arrow"></i>
</i>
</span>
<a href="#" class="text-secondary text-decoration-none address">92
Halsey St,
Brooklyn, NY</a>
</div>
</div>
</div>
</div>
<div class="col-lg-6 mb-6">
<div class="store card border-0 rounded-0">
<div class="position-relative store-image">
<a href="listing-details-full-image.html">
<img src="images/shop/popular-place-3.jpg" alt="store 1" class="card-img-top rounded-0">
</a>
<div class="image-content position-absolute d-flex align-items-center">
<div class="content-right ml-auto d-flex">
<a href="images/shop/full-popular-place-3.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="" data-gtf-mfp="true" data-original-title="Quick view">
<svg class="icon icon-expand">
<use xlink:href="#icon-expand"></use>
</svg>
</a>
<a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><i class="fa fa-bookmark"></i></a>
</div>
</div>
</div>
<div class="card-body pb-4">
<a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">EBI Coffe Vintage - Hobbits Ave St</span></a>
<ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
<li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">4.7</span><span class="number">6 rating</span>
</li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$2.50</span></li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="text-green">Open now!</span></li>
</ul>
<div class="media">
<a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-5.png" alt="testimonial" class="rounded-circle">
</a>
<div class="media-body lh-14 font-size-sm">After a yoga class changed her
life, Maz
became
vegan, launched...
</div>
</div>
</div>
<div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent">
<div class="border-top pt-3">
<span class="d-inline-block mr-1"><i class="fas fa-location-arrow"></i>
</i>
</span>
<a href="#" class="text-secondary text-decoration-none address">275
Hobbits
Ave St,
Queen, NY</a>
</div>
</div>
</div>
</div>
<div class="col-lg-6 mb-6">
<div class="store card border-0 rounded-0">
<div class="position-relative store-image">
<a href="listing-details-full-image.html">
<img src="images/shop/popular-place-5.jpg" alt="store 1" class="card-img-top rounded-0">
</a>
<div class="image-content position-absolute d-flex align-items-center">
<div class="content-right ml-auto d-flex">
<a href="images/shop/full-popular-place-5.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" data-gtf-mfp="true" title="" data-original-title="Quick view">
<svg class="icon icon-expand">
<use xlink:href="#icon-expand"></use>
</svg>
</a>
<a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><i class="fa fa-bookmark"></i></a>
</div>
</div>
</div>
<div class="card-body pb-4">
<a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Meet Grilled - Lower Rd St</span></a>
<ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
<li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">4.8</span><span class="number">2 rating</span>
</li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$12.50</span></li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="text-danger">Close now!</span>
</li>
</ul>
<div class="media">
<a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-3.png" alt="testimonial" class="rounded-circle">
</a>
<div class="media-body lh-14 font-size-sm">Established in 1895, these
style merchants have set the standard in Sydney suiting for
generations...
</div>
</div>
</div>
<div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent">
<div class="border-top pt-3">
<span class="d-inline-block mr-1"><i class="fas fa-location-arrow"></i>
</i>
</span>
<a href="#" class="text-secondary text-decoration-none address">212
Lower
Rd St,
Linden,
NY</a>
</div>
</div>
</div>
</div>
<div class="col-lg-6 mb-6">
<div class="store card border-0 rounded-0">
<div class="position-relative store-image">
<a href="listing-details-full-image.html">
<img src="images/shop/popular-place-6.jpg" alt="store 1" class="card-img-top rounded-0">
</a>
<div class="image-content position-absolute d-flex align-items-center">
<div class="content-right ml-auto d-flex">
<a href="images/shop/full-popular-place-6.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="" data-gtf-mfp="true" data-original-title="Quickview">
<svg class="icon icon-expand">
<use xlink:href="#icon-expand"></use>
</svg>
</a>
<a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><i class="fa fa-bookmark"></i></a>
</div>
</div>
</div>
<div class="card-body pb-4">
<a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Water Melon Pudding - 55 Orchar..</span></a>
<ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
<li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">4.9</span><span class="number">6 rating</span>
</li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$3.20</span></li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="text-green">Open now!</span></li>
</ul>
<div class="media">
 <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-5.png" alt="testimonial" class="rounded-circle">
</a>
<div class="media-body lh-14 font-size-sm">Overlooking Bloomsbury's Russell
Square
and
a 2 minutes' walk from the tube station of the same name...
</div>
</div>
</div>
<div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent">
<div class="border-top pt-3">
<span class="d-inline-block mr-1"><i class="fas fa-location-arrow"></i>
</i>
</span>
<a href="#" class="text-secondary text-decoration-none address">55
Orchard
St, Jeersy
City, NY</a>
</div>
</div>
</div>
</div>
<div class="col-lg-6 mb-6">
<div class="store card border-0 rounded-0">
<div class="position-relative store-image">
<a href="listing-details-full-image.html">
<img src="images/shop/popular-place-1.jpg" alt="store 1" class="card-img-top rounded-0">
</a>
<div class="image-content position-absolute d-flex align-items-center">
<div class="content-right ml-auto d-flex">
<a href="images/shop/full-popular-place-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="" data-gtf-mfp="true" data-original-title="Quick view">
<svg class="icon icon-expand">
<use xlink:href="#icon-expand"></use>
</svg>
</a>
<a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><i class="fa fa-bookmark"></i></a>
</div>
</div>
</div>
<div class="card-body pb-4">
<a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Japan Rice Mixed Seafood</span></a>
<ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
<li class="list-inline-item"><span class="badge badge-success mr-1 d-inline-block">5.0</span><span class="number">4 rating</span>
</li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$9.0</span></li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="text-green">Open now!</span>
</li>
</ul>
<div class="media">
<a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
</a>
<div class="media-body lh-14 font-size-sm">Overlooking Bloomsbury’s Russell
Square and a
2
minutes’ walk from the tube station of the same name...
</div>
</div>
</div>
<div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent">
<div class="border-top pt-3">
<span class="d-inline-block mr-1"><i class="fas fa-location-arrow"></i>
</i>
</span>
<a href="#" class="text-secondary text-decoration-none address">534
Salem
Rd St,
Newark, NY</a>
</div>
</div>
</div>
</div>
<div class="col-lg-6 mb-6">
<div class="store card border-0 rounded-0">
<div class="position-relative store-image">
<a href="listing-details-full-image.html">
<img src="images/shop/popular-place-4.jpg" alt="store 1" class="card-img-top rounded-0">
</a>
<div class="image-content position-absolute d-flex align-items-center">
<div class="content-right ml-auto d-flex">
<a href="images/shop/full-popular-place-4.jpg" class="item viewing" data-toggle="tooltip" data-gtf-mfp="true" data-placement="top" title="" data-original-title="Quick view">
<svg class="icon icon-expand">
<use xlink:href="#icon-expand"></use>
</svg>
</a>
<a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><i class="fa fa-bookmark"></i></a>
</div>
</div>
</div>
<div class="card-body pb-4">
<a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Strawberry Cocktail - Main St</span></a>
<ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
<li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.4</span><span class="number">4 rating</span>
</li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$5.00</span></li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="text-green">Open now!</span>
</li>
</ul>
<div class="media">
<a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-2.png" alt="testimonial" class="rounded-circle">
</a>
<div class="media-body lh-14 font-size-sm">Most items can be packed securely
in
these boxes, which are available in several sizes...
</div>
</div>
</div>
<div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent">
<div class="border-top pt-3">
<span class="d-inline-block mr-1"><i class="fas fa-location-arrow"></i>
</i>
</span>
<a href="#" class="text-secondary text-decoration-none address">
306 Main St, Queen, NY</a>
</div>
</div>
</div>
</div>
<div class="col-lg-6 mb-6">
<div class="store card border-0 rounded-0">
<div class="position-relative store-image">
<a href="listing-details-full-image.html">
<img src="images/shop/top-place-1.jpg" alt="store 1" class="card-img-top rounded-0">
</a>
<div class="image-content position-absolute d-flex align-items-center">
<div class="content-right ml-auto d-flex">
<a href="images/shop/full-top-place-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="" data-gtf-mfp="true" data-original-title="Quickview">
<svg class="icon icon-expand">
<use xlink:href="#icon-expand"></use>
</svg>
</a>
<a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><i class="fa fa-bookmark"></i></a>
</div>
</div>
</div>
<div class="card-body pb-4">
<a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Thai’s Taste Restaurant</span></a>
<ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
<li class="list-inline-item"><span class="badge badge-success mr-1 d-inline-block">5.0</span><span class="number">4 rating</span>
</li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$9.0</span></li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="text-green">Open now!</span>
</li>
 </ul>
<div class="media">
<a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
</a>
<div class="media-body lh-14 font-size-sm">Overlooking Bloomsbury’s Russell
Square and a
2
minutes’ walk from the tube station of the same name...
</div>
</div>
</div>
<div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent">
<div class="border-top pt-3">
<span class="d-inline-block mr-1"><i class="fas fa-location-arrow"></i>
</i>
</span>
<a href="#" class="text-secondary text-decoration-none address">534
Salem
Rd St,
Newark, NY</a>
</div>
</div>
</div>
</div>
<div class="col-lg-6 mb-6">
<div class="store card border-0 rounded-0">
<div class="position-relative store-image">
<a href="listing-details-full-image.html">
<img src="images/shop/top-place-2.jpg" alt="store 2" class="card-img-top rounded-0">
</a>
<div class="image-content position-absolute d-flex align-items-center">
<div class="content-right ml-auto d-flex">
<a href="images/shop/full-top-place-2.jpg" data-gtf-mfp="true" class="item viewing" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick view">
<svg class="icon icon-expand">
<use xlink:href="#icon-expand"></use>
</svg>
</a>
<a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><i class="fa fa-bookmark"></i></a>
</div>
</div>
</div>
<div class="card-body pb-4">
<a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Pepperoni’s Pizza Restaurant</span></a>
<ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
<li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.4</span><span class="number">4 rating</span>
</li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$5.00</span></li>
<li class="list-inline-item separate"></li>
<li class="list-inline-item"><span class="text-green">Open now!</span>
</li>
</ul>
<div class="media">
<a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-2.png" alt="testimonial" class="rounded-circle">
</a>
<div class="media-body lh-14 font-size-sm">Most items can be packed securely
in
these boxes, which are available in several sizes...
</div>
</div>
</div>
<div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent">
<div class="border-top pt-3">
<span class="d-inline-block mr-1"><i class="fas fa-location-arrow"></i>
</i>
</span>
<a href="#" class="text-secondary text-decoration-none address">
306 Main St, Queen, NY</a>
</div>
</div>
</div>
</div>
</div>
<div class="pagination mt-7">
<a href="#" class="btn btn-lg btn-dark-red btn-block font-size-h5 lh-18">
More Results...48/56
</a>
</div>
</div>
</div>
</div>
@endsection