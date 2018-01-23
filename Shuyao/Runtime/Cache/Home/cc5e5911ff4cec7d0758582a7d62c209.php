<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>出生日期</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="/cafe/Public/home/css/mui.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/cafe/Public/home/css/app.css" />
		<link rel="stylesheet" href="/cafe/Public/home/css/mui.picker.min.css" />
		<link rel="stylesheet" href="/cafe/Public/home/css/public.css" />
		<link rel="stylesheet" href="/cafe/Public/home/css/Birthday/birthday.css" />
	</head>

	<body>
		<script src="/cafe/Public/home/js/mui.min.js"></script>
		<script type="text/javascript">
			mui.init()
		</script>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">标题</h1>
		</header>

		<body class="mui-ios mui-ios-9 mui-ios-9-1">
			<header class="mui-bar mui-bar-nav">
				<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
				<h1 class="mui-title">出生日期</h1>
			</header>
			<div class="mui-content">
				<!--表单-->
				<form>
					<div class="mui-content-padded">

						<div id="demo2" data-options="{&quot;type&quot;:&quot;date&quot;,&quot;beginYear&quot;:2014,&quot;endYear&quot;:2016}" class="btn mui-btn mui-btn-block">

							<div id="result" class="ui-alert">2016-12-19</div>
						</div>
						<!--确定按钮-->
						<div class="d-btns">
							<input type="button" value="确定" class="btnyes" />
						</div>
					</div>
				</form>
			</div>
			<script type="text/javascript" src="/cafe/Public/home/js/mui.min.js"></script>
			<!--<script src="../js/mui.picker.js"></script>
		<script src="../js/mui.dtpicker.js"></script>-->
			<script type="text/javascript" src="/cafe/Public/home/js/mui.picker.min.js"></script>
			<script>
				(function($) {
					$.init();
					var result = $('#result')[0];
					var btns = $('.btn');
					btns.each(function(i, btn) {
						btn.addEventListener('tap', function() {
							var _self = this;
							if(_self.picker) {
								_self.picker.show(function(rs) {
									result.innerText = rs.text;
									//									_self.picker.dispose();
									_self.picker = null;
								});
							} else {
								var optionsJson = this.getAttribute('data-options') || '{}';
								var options = JSON.parse(optionsJson);
								var id = this.getAttribute('id');
								/*
								 * 首次显示时实例化组件
								 * 示例为了简洁，将 options 放在了按钮的 dom 上
								 * 也可以直接通过代码声明 optinos 用于实例化 DtPicker
								 */
								_self.picker = new $.DtPicker(options);
								_self.picker.show(function(rs) {
									/*
									 * rs.value 拼合后的 value
									 * rs.text 拼合后的 text
									 * rs.y 年，可以通过 rs.y.vaue 和 rs.y.text 获取值和文本
									 * rs.m 月，用法同年
									 * rs.d 日，用法同年
									 * rs.h 时，用法同年
									 * rs.i 分（minutes 的第二个字母），用法同年
									 */
									result.innerText = '选择结果: ' + rs.text;
									/* 
									 * 返回 false 可以阻止选择框的关闭
									 * return false;
									 */
									/*
									 * 释放组件资源，释放后将将不能再操作组件
									 * 通常情况下，不需要示放组件，new DtPicker(options) 后，可以一直使用。
									 * 当前示例，因为内容较多，如不进行资原释放，在某些设备上会较慢。
									 * 所以每次用完便立即调用 dispose 进行释放，下次用时再创建新实例。
									 */
									_self.picker.dispose();
									_self.picker = null;
								});
							}

						}, false);
					});
				})(mui);
			</script>

			<div class="mui-dtpicker" data-type="datetime">
				<div class="mui-dtpicker-header"> <button data-id="btn-cancel" class="mui-btn">取消</button> <button data-id="btn-ok" class="mui-btn mui-btn-blue">确定</button> </div>
				<div class="mui-dtpicker-title">
					<h5 data-id="title-y">年</h5>
					<h5 data-id="title-m">月</h5>
					<h5 data-id="title-d">日</h5>
					<h5 data-id="title-h">时</h5>
					<h5 data-id="title-i">分</h5></div>
				<div class="mui-dtpicker-body">
					<div data-id="picker-y" class="mui-picker">
						<div class="mui-picker-inner">
							<div class="mui-pciker-rule mui-pciker-rule-ft"></div>
							<ul class="mui-pciker-list" style="transform: perspective(1000px) rotateY(0deg) rotateX(100deg);">
								<li class="" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(0deg);">2013</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-20deg);">2014</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-40deg);">2015</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-60deg);">2016</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-80deg);">2017</li>
								<li class="highlight" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-100deg);">2018</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-120deg);">2019</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-140deg);">2020</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-160deg);">2021</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-180deg);">2022</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-200deg);">2023</li>
							</ul>
							<div class="mui-pciker-rule mui-pciker-rule-bg"></div>
						</div>
					</div>
					<div data-id="picker-m" class="mui-picker">
						<div class="mui-picker-inner">
							<div class="mui-pciker-rule mui-pciker-rule-ft"></div>
							<ul class="mui-pciker-list" style="transform: perspective(1000px) rotateY(0deg) rotateX(0deg);">
								<li class="highlight" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(0deg);">01</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-20deg);">02</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-40deg);">03</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-60deg);">04</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-80deg);">05</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-100deg);">06</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-120deg);">07</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-140deg);">08</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-160deg);">09</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-180deg);">10</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-200deg);">11</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-220deg);">12</li>
							</ul>
							<div class="mui-pciker-rule mui-pciker-rule-bg"></div>
						</div>
					</div>
					<div data-id="picker-d" class="mui-picker">
						<div class="mui-picker-inner">
							<div class="mui-pciker-rule mui-pciker-rule-ft"></div>
							<ul class="mui-pciker-list" style="transform: perspective(1000px) rotateY(0deg) rotateX(380deg);">
								<li class="" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(0deg);">01</li>
								<li class="" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-20deg);">02</li>
								<li class="" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-40deg);">03</li>
								<li class="" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-60deg);">04</li>
								<li class="" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-80deg);">05</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-100deg);">06</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-120deg);">07</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-140deg);">08</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-160deg);">09</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-180deg);">10</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-200deg);">11</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-220deg);">12</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-240deg);">13</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-260deg);">14</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-280deg);">15</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-300deg);">16</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-320deg);">17</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-340deg);">18</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-360deg);">19</li>
								<li class="highlight" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-380deg);">20</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-400deg);">21</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-420deg);">22</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-440deg);">23</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-460deg);">24</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-480deg);">25</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-500deg);">26</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-520deg);">27</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-540deg);">28</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-560deg);">29</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-580deg);">30</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-600deg);">31</li>
							</ul>
							<div class="mui-pciker-rule mui-pciker-rule-bg"></div>
						</div>
					</div>
					<div data-id="picker-h" class="mui-picker">
						<div class="mui-picker-inner">
							<div class="mui-pciker-rule mui-pciker-rule-ft"></div>
							<ul class="mui-pciker-list" style="transform: perspective(1000px) rotateY(0deg) rotateX(280deg);">
								<li class="" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(0deg);">00</li>
								<li class="" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-20deg);">01</li>
								<li class="" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-40deg);">02</li>
								<li class="" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-60deg);">03</li>
								<li class="" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-80deg);">04</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-100deg);">05</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-120deg);">06</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-140deg);">07</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-160deg);">08</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-180deg);">09</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-200deg);">10</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-220deg);">11</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-240deg);">12</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-260deg);">13</li>
								<li class="highlight" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-280deg);">14</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-300deg);">15</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-320deg);">16</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-340deg);">17</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-360deg);">18</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-380deg);">19</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-400deg);">20</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-420deg);">21</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-440deg);">22</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-460deg);">23</li>
							</ul>
							<div class="mui-pciker-rule mui-pciker-rule-bg"></div>
						</div>
					</div>
					<div data-id="picker-i" class="mui-picker">
						<div class="mui-picker-inner">
							<div class="mui-pciker-rule mui-pciker-rule-ft"></div>
							<ul class="mui-pciker-list" style="transform: perspective(1000px) rotateY(0deg) rotateX(60deg);">
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(0deg);">00</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-20deg);">01</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-40deg);">02</li>
								<li class="visible highlight" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-60deg);">03</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-80deg);">04</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-100deg);">05</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-120deg);">06</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-140deg);">07</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-160deg);">08</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-180deg);">09</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-200deg);">10</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-220deg);">11</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-240deg);">12</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-260deg);">13</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-280deg);">14</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-300deg);">15</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-320deg);">16</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-340deg);">17</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-360deg);">18</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-380deg);">19</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-400deg);">20</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-420deg);">21</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-440deg);">22</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-460deg);">23</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-480deg);">24</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-500deg);">25</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-520deg);">26</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-540deg);">27</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-560deg);">28</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-580deg);">29</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-600deg);">30</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-620deg);">31</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-640deg);">32</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-660deg);">33</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-680deg);">34</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-700deg);">35</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-720deg);">36</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-740deg);">37</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-760deg);">38</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-780deg);">39</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-800deg);">40</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-820deg);">41</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-840deg);">42</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-860deg);">43</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-880deg);">44</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-900deg);">45</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-920deg);">46</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-940deg);">47</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-960deg);">48</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-980deg);">49</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1000deg);">50</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1020deg);">51</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1040deg);">52</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1060deg);">53</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1080deg);">54</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1100deg);">55</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1120deg);">56</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1140deg);">57</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1160deg);">58</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1180deg);">59</li>
							</ul>
							<div class="mui-pciker-rule mui-pciker-rule-bg"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="mui-dtpicker" data-type="date">
				<div class="mui-dtpicker-header"> <button data-id="btn-cancel" class="mui-btn">取消</button> <button data-id="btn-ok" class="mui-btn mui-btn-blue">确定</button> </div>
				<div class="mui-dtpicker-title">
					<h5 data-id="title-y">年</h5>
					<h5 data-id="title-m">月</h5>
					<h5 data-id="title-d">日</h5>
					<h5 data-id="title-h">时</h5>
					<h5 data-id="title-i">分</h5></div>
				<div class="mui-dtpicker-body">
					<div data-id="picker-y" class="mui-picker">
						<div class="mui-picker-inner">
							<div class="mui-pciker-rule mui-pciker-rule-ft"></div>
							<ul class="mui-pciker-list" style="transform: perspective(1000px) rotateY(0deg) rotateX(0deg);">
								<li class="highlight" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(0deg);">2014</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-20deg);">2015</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-40deg);">2016</li>
							</ul>
							<div class="mui-pciker-rule mui-pciker-rule-bg"></div>
						</div>
					</div>
					<div data-id="picker-m" class="mui-picker">
						<div class="mui-picker-inner">
							<div class="mui-pciker-rule mui-pciker-rule-ft"></div>
							<ul class="mui-pciker-list" style="transform: perspective(1000px) rotateY(0deg) rotateX(0deg);">
								<li class="highlight" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(0deg);">01</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-20deg);">02</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-40deg);">03</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-60deg);">04</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-80deg);">05</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-100deg);">06</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-120deg);">07</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-140deg);">08</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-160deg);">09</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-180deg);">10</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-200deg);">11</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-220deg);">12</li>
							</ul>
							<div class="mui-pciker-rule mui-pciker-rule-bg"></div>
						</div>
					</div>
					<div data-id="picker-d" class="mui-picker">
						<div class="mui-picker-inner">
							<div class="mui-pciker-rule mui-pciker-rule-ft"></div>
							<ul class="mui-pciker-list" style="transform: perspective(1000px) rotateY(0deg) rotateX(0deg);">
								<li class="highlight" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(0deg);">01</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-20deg);">02</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-40deg);">03</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-60deg);">04</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-80deg);">05</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-100deg);">06</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-120deg);">07</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-140deg);">08</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-160deg);">09</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-180deg);">10</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-200deg);">11</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-220deg);">12</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-240deg);">13</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-260deg);">14</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-280deg);">15</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-300deg);">16</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-320deg);">17</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-340deg);">18</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-360deg);">19</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-380deg);">20</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-400deg);">21</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-420deg);">22</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-440deg);">23</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-460deg);">24</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-480deg);">25</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-500deg);">26</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-520deg);">27</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-540deg);">28</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-560deg);">29</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-580deg);">30</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-600deg);">31</li>
							</ul>
							<div class="mui-pciker-rule mui-pciker-rule-bg"></div>
						</div>
					</div>
					<div data-id="picker-h" class="mui-picker">
						<div class="mui-picker-inner">
							<div class="mui-pciker-rule mui-pciker-rule-ft"></div>
							<ul class="mui-pciker-list" style="transform: perspective(1000px) rotateY(0deg) rotateX(0deg);">
								<li class="highlight" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(0deg);">00</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-20deg);">01</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-40deg);">02</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-60deg);">03</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-80deg);">04</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-100deg);">05</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-120deg);">06</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-140deg);">07</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-160deg);">08</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-180deg);">09</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-200deg);">10</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-220deg);">11</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-240deg);">12</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-260deg);">13</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-280deg);">14</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-300deg);">15</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-320deg);">16</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-340deg);">17</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-360deg);">18</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-380deg);">19</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-400deg);">20</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-420deg);">21</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-440deg);">22</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-460deg);">23</li>
							</ul>
							<div class="mui-pciker-rule mui-pciker-rule-bg"></div>
						</div>
					</div>
					<div data-id="picker-i" class="mui-picker">
						<div class="mui-picker-inner">
							<div class="mui-pciker-rule mui-pciker-rule-ft"></div>
							<ul class="mui-pciker-list" style="transform: perspective(1000px) rotateY(0deg) rotateX(0deg);">
								<li class="highlight" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(0deg);">00</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-20deg);">01</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-40deg);">02</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-60deg);">03</li>
								<li class="visible" style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-80deg);">04</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-100deg);">05</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-120deg);">06</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-140deg);">07</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-160deg);">08</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-180deg);">09</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-200deg);">10</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-220deg);">11</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-240deg);">12</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-260deg);">13</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-280deg);">14</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-300deg);">15</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-320deg);">16</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-340deg);">17</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-360deg);">18</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-380deg);">19</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-400deg);">20</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-420deg);">21</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-440deg);">22</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-460deg);">23</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-480deg);">24</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-500deg);">25</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-520deg);">26</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-540deg);">27</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-560deg);">28</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-580deg);">29</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-600deg);">30</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-620deg);">31</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-640deg);">32</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-660deg);">33</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-680deg);">34</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-700deg);">35</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-720deg);">36</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-740deg);">37</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-760deg);">38</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-780deg);">39</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-800deg);">40</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-820deg);">41</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-840deg);">42</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-860deg);">43</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-880deg);">44</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-900deg);">45</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-920deg);">46</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-940deg);">47</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-960deg);">48</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-980deg);">49</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1000deg);">50</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1020deg);">51</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1040deg);">52</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1060deg);">53</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1080deg);">54</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1100deg);">55</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1120deg);">56</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1140deg);">57</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1160deg);">58</li>
								<li style="transform-origin: center center -90px; transform: translateZ(90px) rotateX(-1180deg);">59</li>
							</ul>
							<div class="mui-pciker-rule mui-pciker-rule-bg"></div>
						</div>
					</div>
				</div>
			</div>

		</body>

</html>