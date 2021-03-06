﻿@extends('index.layout.layout')

@section('title', '主页')
  
@section('content')


<div class="container container_col">
  <div class="news-notice">
    <div class="indnews">
      <div class="news-pic">
        <div id="newspic" class="slideBox">
          <ul class="items">
            <li><a href="#" title="本会召开第一届第一次主任会议和委员会议1"><img src="style/upload/newsimg.jpg"></a></li>
            <li><a href="#" title="本会召开第一届第一次主任会议和委员会议2"><img src="style/upload/newsimg.jpg"></a></li>
            <li><a href="#" title="本会召开第一届第一次主任会议和委员会议3"><img src="style/upload/newsimg.jpg"></a></li>
            <li><a href="#" title="本会召开第一届第一次主任会议和委员会议4"><img src="style/upload/newsimg.jpg"></a></li>
            <li><a href="#" title="本会召开第一届第一次主任会议和委员会议5"><img src="style/upload/newsimg.jpg"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="news-txt" id="news">
      <div class="news-title" >
        <div class="news-name tab-nav j-tab-nav">
        	<a href="javascript:void(0);"  v-for="data in info" class="current"><{data['cate_name']}><i></i></a>
        </div>
        <a href="#" class="more">更多 >></a>
      </div>
      <div class="tab-con">
      <div class="j-tab-con">
      <div class="tab-con-item news-con" style="display: block;">
        <ul class="newslist" v-for="data in info">
          <li><a href="#"><{data['title_name']}></a><span>09-10</span></li>
        </ul>
      </div>
      <div class="tab-con-item news-con" style="display: none;">
          <ul class="newslist" v-for="data in info">
            <li><a href="#"><{data['title_name']}></a><span>09-10</span></li>
          </ul>
        </div>
        <div class="tab-con-item news-con" style="display: none;">
            <ul class="newslist" v-for="data in info">
              <li><a href="#"><{data['title_name']}></a><span>09-10</span></li>
            </ul>
          </div>
          <div class="tab-con-item news-con" style="display: none;">
              <ul class="newslist" v-for="data in info">
                <li><a href="#"><{data['title_name']}></a><span>09-10</span></li>
              </ul>
            </div>
      </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="fwzn">
    <div class="tit">服<br />
      务<br />
      指<br />
      南</div>
    <div class="iconlist" id="znimg" > 
        <a href="javascript:;" v-for="infos in znimgs"  class="icon1">
            <div class="pic"><img v-bind:src="[infos['img']]" ></div>
        <p><{infos['name']}></p>
        </a>
    </div> 
  </div>
  <div class="col-box">
    <div class="news-txt col-3">
      <div class="news-title">
        <div class="name">仲裁规则<i></i></div>
        <div class="smalllist"> <a href="#">仲裁规则</a> <a href="#">法律法规</a> <a href="#">统计数据</a> </div>
        <a href="#" class="more">更多 >></a> </div>
      <div class="news-con">
        <ul class="newslist">
          <li><a href="#">本会开展加强仲裁工作推进会议</a><span>09-10</span></li>
          <li><a href="#">本会召开第一届仲裁员聘任会议</a><span>09-10</span></li>
          <li><a href="#">本会与市中级人民法院就建立仲裁与诉讼衔接机制召开座谈会</a><span>09-10</span></li>
          <li><a href="#">宁夏仲裁工作座谈会在我市召开</a><span>09-10</span></li>
          <li><a href="#">“一带一路”仲裁发展交流会在我市召开</a><span>09-10</span></li>
          <li><a href="#">宁夏仲裁工作座谈会在我市召开</a><span>09-10</span></li>
        </ul>
      </div>
    </div>
    <div class="news-txt col-3">
      <div class="news-title">
        <div class="name">仲裁员<i></i></div>
        <div class="smalllist"> <a href="#">仲裁员名册</a> <a href="#">仲裁员守则</a> </div>
        <a href="#" class="more">更多 >></a> </div>
      <div class="news-con">
        <ul class="newslist">
          <li><a href="#">本会开展加强仲裁工作推进会议</a><span>09-10</span></li>
          <li><a href="#">本会召开第一届仲裁员聘任会议</a><span>09-10</span></li>
          <li><a href="#">本会与市中级人民法院就建立仲裁与诉讼衔接机制召开座谈会</a><span>09-10</span></li>
          <li><a href="#">宁夏仲裁工作座谈会在我市召开</a><span>09-10</span></li>
          <li><a href="#">“一带一路”仲裁发展交流会在我市召开</a><span>09-10</span></li>
          <li><a href="#">宁夏仲裁工作座谈会在我市召开</a><span>09-10</span></li>
        </ul>
      </div>
    </div>
    <div class="news-txt col-3 last">
      <div class="news-title">
        <div class="name">法律法规<i></i></div>
        <a href="#" class="more">更多 >></a> </div>
      <div class="news-con">
        <ul class="newslist">
          <li><a href="#">本会开展加强仲裁工作推进会议</a><span>09-10</span></li>
          <li><a href="#">本会召开第一届仲裁员聘任会议</a><span>09-10</span></li>
          <li><a href="#">本会与市中级人民法院就建立仲裁与诉讼衔接机制召开座谈会</a><span>09-10</span></li>
          <li><a href="#">宁夏仲裁工作座谈会在我市召开</a><span>09-10</span></li>
          <li><a href="#">“一带一路”仲裁发展交流会在我市召开</a><span>09-10</span></li>
          <li><a href="#">宁夏仲裁工作座谈会在我市召开</a><span>09-10</span></li>
        </ul>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="col-box">
    <div class="col-2-l">
      <div class="tit">在线服务</div>
      <div class="list" id="zximg" > 
        <div class="ct last" v-for="v in zximgs" >
          <a href="javascript:;" class="color_bj color-2" ><div class="pic"><img v-bind:src="[v['img']]" /></div> 
          <p><{v['name']}></p>
          </a>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <div class="col-box">
    <div class="col-2-r">
      <div class="tit">格式合同</div>
      <div class="tit" style="margin-left:307px;">示范条款</div>
      <div class="tit" style="margin-left:420px; background: url(/style/images/jsq2.png) 0 9px no-repeat;">费用速算</div>
      <div class="clearfix"></div>
      <div class="sfbox">
      	<div class="gsht">
        	<ul class="newslist htlist">
          <li><a href="#">本会开展加强仲裁工作推进会议</a><span>09-10</span></li>
          <li><a href="#">本会召开第一届仲裁员聘任会议</a><span>09-10</span></li>
          <li><a href="#">本会与市中级人民法院就建立仲裁与诉讼衔接机制召开座谈会</a><span>09-10</span></li>
          <li><a href="#">宁夏仲裁工作座谈会在我市召开</a><span>09-10</span></li>
          <li><a href="#">"一带一路"仲裁发展交流会在我市召开</a><span>09-10</span></li>
          <li><a href="#">宁夏仲裁工作座谈会在我市召开</a><span>09-10</span></li>
        </ul>
        </div>
        <div class="sftxt">
          <div class="info">将民商事案子发展到仲裁机构办理有四种办法：<br />
            ①在合同中写上以上条款若发生纠纷提交仲裁机构仲裁的条款；<br />
            ②后来补充仲裁协议；<br />
            ③临时邀请仲裁；<br />
            ④在签订合同的同时就约定先予仲裁。<br />
            其中第一种是最基本方式。<br />
            根据《中华人民共和国仲裁法》和《最高人民法院关于适用（中华人民共和国仲裁法）》相关规定中华人民共和国仲裁法中华人民共和国仲裁法中华人民共和国仲裁法中华人民共和国仲裁法中华人民共和国仲裁法</div>
          <a href="#">[查看详情]</a> </div>
        <div class="jisuan">
          <div class="jsbox"> <span>争议金额</span>
            <div class="jsq">
              <input type="text" class="ipt-jsq" placeholder="输入金额..." />
              <a href="javascript:;">计算</a> </div>
          </div>
          <div class="jsjg">
            <div class="tab">案件受理费：<span>0.00元</span></div>
            <div class="tab">案件处理费：<span>0.00元</span></div>
            <div class="tab last">总计：<span>0.00元</span></div>
          </div>
          <div class="smtxt">仅供参考，计算结果以立案室的计算为准</div>
          <div class="xxlinks"> <a href="#" class="fl">案件受理费标准>></a> <a href="#" class="fr">案件处理费标准>></a> </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="clearfix"></div>
    
    
  </div>
  <div class="linksbox" id="link">
    <div class="txtlisttit linktit"> <span>友情链接</span>
      <div class="tab-nav j-tab-nav"> <a href="javascript:void(0);" class="current">省内各州市网站</a> <a href="javascript:void(0);" class="">州内各县市网站</a> <a href="javascript:void(0);" class="">党群部门</a> <a href="javascript:void(0);" class="">政府部门</a> <a href="javascript:void(0);" class="">乡镇部门</a> </div>
    </div>
    <div class="listcon tab-con">
      <div class="j-tab-con">
        <div class="tab-con-item linkcon" style="display: block;">
          <ul class="linkslist">
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市市政府官方政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="tab-con-item linkcon" style="display: none;">
          <ul class="linkslist">
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="tab-con-item linkcon" style="display: none;">
          <ul class="linkslist">
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="tab-con-item linkcon" style="display: none;">
          <ul class="linkslist">
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="tab-con-item linkcon" style="display: none;">
          <ul class="linkslist">
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
            <li><a href="#" target="_blank">市政府官方</a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    var znimg = new Vue({
      el : "#znimg",
      data : {
        znimgs : null
      },
      delimiters:['<{','}>'],
      mounted(){
          var url = 'fwznimg'
          axios.post(url).then(function(res){
            znimg.znimgs=res.data
          })
      }
    })

    var zximg =new Vue({
      el : "#zximg",
      data : {
        zximgs : null,
      },
      delimiters:['<{','}>'],
      mounted(){
        var url = 'zxfwimg'
        axios.post(url).then(function(res){
          zximg.zximgs=res.data
        })
      }
    })

    var cate = new Vue({
      el : "#news",
      data : {
        info: null
      },
      delimiters:['<{','}>'],
      mounted(){
        var url = 'cateName'
        axios.post(url).then(function(res){
          cate.info=res.data
        })
      }
    })
</script>
@endsection

