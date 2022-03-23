
<!DOCTYPE html><html><head><meta charset="utf-8"><title>Coupon API</title><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"><style>@import url('https://fonts.googleapis.com/css?family=Roboto:400,700|Inconsolata|Raleway:200');.hljs-comment,.hljs-title{color:#8e908c}.hljs-variable,.hljs-attribute,.hljs-tag,.hljs-regexp,.ruby .hljs-constant,.xml .hljs-tag .hljs-title,.xml .hljs-pi,.xml .hljs-doctype,.html .hljs-doctype,.css .hljs-id,.css .hljs-class,.css .hljs-pseudo{color:#c82829}.hljs-number,.hljs-preprocessor,.hljs-pragma,.hljs-built_in,.hljs-literal,.hljs-params,.hljs-constant{color:#f5871f}.ruby .hljs-class .hljs-title,.css .hljs-rules .hljs-attribute{color:#eab700}.hljs-string,.hljs-value,.hljs-inheritance,.hljs-header,.ruby .hljs-symbol,.xml .hljs-cdata{color:#718c00}.css .hljs-hexcolor{color:#3e999f}.hljs-function,.python .hljs-decorator,.python .hljs-title,.ruby .hljs-function .hljs-title,.ruby .hljs-title .hljs-keyword,.perl .hljs-sub,.javascript .hljs-title,.coffeescript .hljs-title{color:#4271ae}.hljs-keyword,.javascript .hljs-function{color:#8959a8}.hljs{display:block;background:white;color:#4d4d4c;padding:.5em}.coffeescript .javascript,.javascript .xml,.tex .hljs-formula,.xml .javascript,.xml .vbscript,.xml .css,.xml .hljs-cdata{opacity:.5}.right .hljs-comment{color:#969896}.right .css .hljs-class,.right .css .hljs-id,.right .css .hljs-pseudo,.right .hljs-attribute,.right .hljs-regexp,.right .hljs-tag,.right .hljs-variable,.right .html .hljs-doctype,.right .ruby .hljs-constant,.right .xml .hljs-doctype,.right .xml .hljs-pi,.right .xml .hljs-tag .hljs-title{color:#c66}.right .hljs-built_in,.right .hljs-constant,.right .hljs-literal,.right .hljs-number,.right .hljs-params,.right .hljs-pragma,.right .hljs-preprocessor{color:#de935f}.right .css .hljs-rule .hljs-attribute,.right .ruby .hljs-class .hljs-title{color:#f0c674}.right .hljs-header,.right .hljs-inheritance,.right .hljs-name,.right .hljs-string,.right .hljs-value,.right .ruby .hljs-symbol,.right .xml .hljs-cdata{color:#b5bd68}.right .css .hljs-hexcolor,.right .hljs-title{color:#8abeb7}.right .coffeescript .hljs-title,.right .hljs-function,.right .javascript .hljs-title,.right .perl .hljs-sub,.right .python .hljs-decorator,.right .python .hljs-title,.right .ruby .hljs-function .hljs-title,.right .ruby .hljs-title .hljs-keyword{color:#81a2be}.right .hljs-keyword,.right .javascript .hljs-function{color:#b294bb}.right .hljs{display:block;overflow-x:auto;background:#1d1f21;color:#c5c8c6;padding:.5em;-webkit-text-size-adjust:none}.right .coffeescript .javascript,.right .javascript .xml,.right .tex .hljs-formula,.right .xml .css,.right .xml .hljs-cdata,.right .xml .javascript,.right .xml .vbscript{opacity:.5}body{color:black;background:white;font:400 14px / 1.42 'Roboto',Helvetica,sans-serif}header{border-bottom:1px solid #ededed;margin-bottom:12px}h1,h2,h3,h4,h5{color:black;margin:12px 0}h1 .permalink,h2 .permalink,h3 .permalink,h4 .permalink,h5 .permalink{margin-left:0;opacity:0;transition:opacity .25s ease}h1:hover .permalink,h2:hover .permalink,h3:hover .permalink,h4:hover .permalink,h5:hover .permalink{opacity:1}.triple h1 .permalink,.triple h2 .permalink,.triple h3 .permalink,.triple h4 .permalink,.triple h5 .permalink{opacity:.15}.triple h1:hover .permalink,.triple h2:hover .permalink,.triple h3:hover .permalink,.triple h4:hover .permalink,.triple h5:hover .permalink{opacity:.15}h1{font:200 36px 'Raleway',Helvetica,sans-serif;font-size:36px}h2{font:200 36px 'Raleway',Helvetica,sans-serif;font-size:30px}h3{font-size:100%;text-transform:uppercase}h5{font-size:100%;font-weight:normal}p{margin:0 0 10px}p.choices{line-height:1.6}a{color:#18bc9c;text-decoration:none}li p{margin:0}hr.split{border:0;height:1px;width:100%;padding-left:6px;margin:12px auto;background-image:linear-gradient(to right, rgba(0,0,0,0) 20%, rgba(0,0,0,0.2) 51.4%, rgba(255,255,255,0.2) 51.4%, rgba(255,255,255,0) 80%)}dl dt{float:left;width:280px;clear:left;text-align:right;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;font-weight:700}dl dd{margin-left:300px}blockquote{color:rgba(0,0,0,0.5);font-size:15.5px;padding:10px 20px;margin:12px 0;border-left:5px solid #e8e8e8}blockquote p:last-child{margin-bottom:0}pre{background-color:#f5f5f5;padding:12px;border:1px solid #cfcfcf;border-radius:6px;overflow:auto}pre code{color:black;background-color:transparent;padding:0;border:none}code{color:#444;background-color:#f5f5f5;font:'Inconsolata',monospace;padding:1px 4px;border:1px solid #cfcfcf;border-radius:3px}ul,ol{padding-left:2em}table{border-collapse:collapse;border-spacing:0;margin-bottom:12px}table tr:nth-child(2n){background-color:#fafafa}table th,table td{padding:6px 12px;border:1px solid #e6e6e6}.text-muted{opacity:.5}.note,.warning{padding:.3em 1em;margin:1em 0;border-radius:2px;font-size:90%}.note h1,.warning h1,.note h2,.warning h2,.note h3,.warning h3,.note h4,.warning h4,.note h5,.warning h5,.note h6,.warning h6{font-family:200 36px 'Raleway',Helvetica,sans-serif;font-size:135%;font-weight:500}.note p,.warning p{margin:.5em 0}.note{color:black;background-color:#eff7fc;border-left:4px solid #3498db}.note h1,.note h2,.note h3,.note h4,.note h5,.note h6{color:#3498db}.warning{color:black;background-color:#fcf0ef;border-left:4px solid #d62c1a}.warning h1,.warning h2,.warning h3,.warning h4,.warning h5,.warning h6{color:#d62c1a}header{margin-top:24px}nav{position:fixed;top:24px;bottom:0;overflow-y:auto}nav .resource-group{padding:0}nav .resource-group .heading{position:relative}nav .resource-group .heading .chevron{position:absolute;top:12px;right:12px;opacity:.5}nav .resource-group .heading a{display:block;color:black;opacity:.7;border-left:2px solid transparent;margin:0}nav .resource-group .heading a:hover{text-decoration:none;background-color:bad-color;border-left:2px solid black}nav ul{list-style-type:none;padding-left:0}nav ul a{display:block;font-size:13px;color:rgba(0,0,0,0.7);padding:8px 12px;border-top:1px solid #ededed;border-left:2px solid transparent;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}nav ul a:hover{text-decoration:none;background-color:bad-color;border-left:2px solid black}nav ul>li{margin:0}nav ul>li:first-child{margin-top:-12px}nav ul>li:last-child{margin-bottom:-12px}nav ul ul a{padding-left:24px}nav ul ul li{margin:0}nav ul ul li:first-child{margin-top:0}nav ul ul li:last-child{margin-bottom:0}nav>div>div>ul>li:first-child>a{border-top:none}.preload *{transition:none !important}.pull-left{float:left}.pull-right{float:right}.badge{display:inline-block;float:right;min-width:10px;min-height:14px;padding:3px 7px;font-size:12px;color:#000;background-color:#ededed;border-radius:10px;margin:-2px 0}.badge.get{color:white;background-color:#3498db}.badge.head{color:white;background-color:#3498db}.badge.options{color:white;background-color:#3498db}.badge.put{color:white;background-color:#f39c12}.badge.patch{color:white;background-color:#f39c12}.badge.post{color:white;background-color:#18bc9c}.badge.delete{color:white;background-color:#e74c3c}.collapse-button{float:right}.collapse-button .close{display:none;color:#18bc9c;cursor:pointer}.collapse-button .open{color:#18bc9c;cursor:pointer}.collapse-button.show .close{display:inline}.collapse-button.show .open{display:none}.collapse-content{max-height:0;overflow:hidden;transition:max-height .3s ease-in-out}nav{width:220px}.container{max-width:940px;margin-left:auto;margin-right:auto}.container .row .content{margin-left:244px;width:696px}.container .row:after{content:'';display:block;clear:both}.container-fluid nav{width:22%}.container-fluid .row .content{margin-left:24%}.container-fluid.triple nav{width:16.5%;padding-right:1px}.container-fluid.triple .row .content{position:relative;margin-left:16.5%;padding-left:24px}.middle:before,.middle:after{content:'';display:table}.middle:after{clear:both}.middle{box-sizing:border-box;width:51.5%;padding-right:12px}.right{box-sizing:border-box;float:right;width:48.5%;padding-left:12px}.right a{color:#18bc9c}.right h1,.right h2,.right h3,.right h4,.right h5,.right p,.right div{color:white}.right pre{background-color:#1d1f21;border:1px solid #1d1f21}.right pre code{color:#c5c8c6}.right .description{margin-top:12px}.triple .resource-heading{font-size:125%}.definition{margin-top:12px;margin-bottom:12px}.definition .method{font-weight:bold}.definition .method.get{color:#2e80b8}.definition .method.head{color:#2e80b8}.definition .method.options{color:#2e80b8}.definition .method.post{color:#2eb89d}.definition .method.put{color:#b8822e}.definition .method.patch{color:#b8822e}.definition .method.delete{color:#b83b2e}.definition .uri{word-break:break-all;word-wrap:break-word}.definition .hostname{opacity:.5}.example-names{background-color:#eee;padding:12px;border-radius:6px}.example-names .tab-button{cursor:pointer;color:black;border:1px solid #ddd;padding:6px;margin-left:12px}.example-names .tab-button.active{background-color:#d5d5d5}.right .example-names{background-color:#444}.right .example-names .tab-button{color:white;border:1px solid #666;border-radius:6px}.right .example-names .tab-button.active{background-color:#5e5e5e}#nav-background{position:fixed;left:0;top:0;bottom:0;width:16.5%;padding-right:14.4px;background-color:#fbfbfb;border-right:1px solid #f0f0f0;z-index:-1}#right-panel-background{position:absolute;right:-12px;top:-12px;bottom:-12px;width:48.6%;background-color:#333;z-index:-1}@media (max-width:1200px){nav{width:198px}.container{max-width:840px}.container .row .content{margin-left:224px;width:606px}}@media (max-width:992px){nav{width:169.4px}.container{max-width:720px}.container .row .content{margin-left:194px;width:526px}}@media (max-width:768px){nav{display:none}.container{width:95%;max-width:none}.container .row .content,.container-fluid .row .content,.container-fluid.triple .row .content{margin-left:auto;margin-right:auto;width:95%}#nav-background{display:none}#right-panel-background{width:48.6%}}.back-to-top{position:fixed;z-index:1;bottom:0;right:24px;padding:4px 8px;color:rgba(0,0,0,0.5);background-color:#ededed;text-decoration:none !important;border-top:1px solid #ededed;border-left:1px solid #ededed;border-right:1px solid #ededed;border-top-left-radius:3px;border-top-right-radius:3px}.resource-group{padding:12px;margin-bottom:12px;background-color:white;border:1px solid #ededed;border-radius:6px}.resource-group h2.group-heading,.resource-group .heading a{padding:12px;margin:-12px -12px 12px -12px;background-color:#ededed;border-bottom:1px solid #ededed;border-top-left-radius:6px;border-top-right-radius:6px;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.triple .content .resource-group{padding:0;border:none}.triple .content .resource-group h2.group-heading,.triple .content .resource-group .heading a{margin:0 0 12px 0;border:1px solid #ededed}nav .resource-group .heading a{padding:12px;margin-bottom:0}nav .resource-group .collapse-content{padding:0}.action{margin-bottom:12px;padding:12px 12px 0 12px;overflow:hidden;border:1px solid transparent;border-radius:6px}.action h4.action-heading{padding:6px 12px;margin:-12px -12px 12px -12px;border-bottom:1px solid transparent;border-top-left-radius:6px;border-top-right-radius:6px;overflow:hidden}.action h4.action-heading .name{float:right;font-weight:normal;padding:6px 0}.action h4.action-heading .method{padding:6px 12px;margin-right:12px;border-radius:3px;display:inline-block}.action h4.action-heading .method.get{color:#000;background-color:white}.action h4.action-heading .method.head{color:#000;background-color:white}.action h4.action-heading .method.options{color:#000;background-color:white}.action h4.action-heading .method.put{color:#000;background-color:white}.action h4.action-heading .method.patch{color:#000;background-color:white}.action h4.action-heading .method.post{color:#000;background-color:white}.action h4.action-heading .method.delete{color:#000;background-color:white}.action h4.action-heading code{color:#444;background-color:rgba(255,255,255,0.7);border-color:transparent;font-weight:normal;word-break:break-all;display:inline-block;margin-top:2px}.action dl.inner{padding-bottom:2px}.action .title{border-bottom:1px solid white;margin:0 -12px -1px -12px;padding:12px}.action.get{border-color:#3498db}.action.get h4.action-heading{color:white;background:#3498db;border-bottom-color:#3498db}.action.head{border-color:#3498db}.action.head h4.action-heading{color:white;background:#3498db;border-bottom-color:#3498db}.action.options{border-color:#3498db}.action.options h4.action-heading{color:white;background:#3498db;border-bottom-color:#3498db}.action.post{border-color:#18bc9c}.action.post h4.action-heading{color:white;background:#18bc9c;border-bottom-color:#18bc9c}.action.put{border-color:#f39c12}.action.put h4.action-heading{color:white;background:#f39c12;border-bottom-color:#f39c12}.action.patch{border-color:#f39c12}.action.patch h4.action-heading{color:white;background:#f39c12;border-bottom-color:#f39c12}.action.delete{border-color:#e74c3c}.action.delete h4.action-heading{color:white;background:#e74c3c;border-bottom-color:#e74c3c}</style></head><body class="preload"><a href="#top" class="text-muted back-to-top"><i class="fa fa-toggle-up"></i>&nbsp;Back to top</a><div class="container"><div class="row"><nav><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#top">Overview</a></div><div class="collapse-content"><ul><li><a href="#header-http-methods">HTTP methods</a></li><li><a href="#header-domain">Domain</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#coupon">Coupon</a></div><div class="collapse-content"><ul><li><a href="#coupon-retrieve-the-list-of-coupon-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Retrieve the list of coupon</a></li><li><a href="#coupon-retrieve-a-coupon-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Retrieve a coupon</a></li><li><a href="#coupon-create-a-coupon-post"><span class="badge post"><i class="fa fa-plus"></i></span>Create a coupon</a></li><li><a href="#coupon-update-coupon-put"><span class="badge put"><i class="fa fa-pencil"></i></span>Update coupon</a></li><li><a href="#coupon-delete-a-coupon-delete"><span class="badge delete"><i class="fa fa-times"></i></span>Delete a Coupon</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#shops">Shops</a></div><div class="collapse-content"><ul><li><a href="#shops-retrieve-shops-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Retrieve Shops</a></li><li><a href="#shops-retrieve-a-shop-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Retrieve a Shop</a></li><li><a href="#shops-create-a-shop-post"><span class="badge post"><i class="fa fa-plus"></i></span>Create a Shop</a></li><li><a href="#shops-update-shop-put"><span class="badge put"><i class="fa fa-pencil"></i></span>Update Shop</a></li><li><a href="#shops-delete-a-shop-delete"><span class="badge delete"><i class="fa fa-times"></i></span>Delete a Shop</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#couponshops">CouponShops</a></div><div class="collapse-content"><ul><li><a href="#couponshops-retrieve-couponshops-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Retrieve CouponShops</a></li><li><a href="#couponshops-retrieve-couponshops-get-1"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Retrieve CouponShops</a></li><li><a href="#couponshops-create-a-couponshop-post"><span class="badge post"><i class="fa fa-plus"></i></span>Create a CouponShop</a></li><li><a href="#couponshops-delete-a-couponshop-delete"><span class="badge delete"><i class="fa fa-times"></i></span>Delete a CouponShop</a></li></ul></div></div></nav><div class="content"><header><h1 id="top">Coupon API</h1></header><p>Coupon API used to manage coupons.</p>
            <h2 id="header-http-methods">HTTP methods <a class="permalink" href="#header-http-methods" aria-hidden="true">¶</a></h2>
            <p>Coupon API is a REST API using the following HTTP methods:</p>
            <ul>
                <li>
                    <p>GET: To retrieve a list of items or a item. By providing an ID as the last segment of the url, only the item corresponding to that ID is returned.</p>
                </li>
                <li>
                    <p>POST: To create an item.</p>
                </li>
                <li>
                    <p>PUT: To update an item. The item’s ID is required as the last segment of the url.</p>
                </li>
                <li>
                    <p>DELETE: To delete items. By providing an ID as the last segment of the url, only the item corresponding to that ID is deleted.</p>
                </li>
            </ul>
            <h2 id="header-domain">Domain <a class="permalink" href="#header-domain" aria-hidden="true">¶</a></h2>
            <p><strong>Dev</strong></p>
            <pre><code><span class="hljs-string">https:</span><span class="hljs-comment">//dev-api-coupon.com/1</span></code></pre>
            <section id="coupon" class="resource-group"><h2 class="group-heading">Coupon <a href="#coupon" class="permalink">&para;</a></h2><p>The endpoint controls coupon feature</p>
                <div id="coupon-retrieve-the-list-of-coupon" class="resource"><h3 class="resource-heading">Retrieve the list of coupon <a href="#coupon-retrieve-the-list-of-coupon" class="permalink">&nbsp;&para;</a></h3><p>Retrieve the list of coupons.</p>
                    <div id="coupon-retrieve-the-list-of-coupon-get" class="action get"><h4 class="action-heading"><div class="name"></div><a href="#coupon-retrieve-the-list-of-coupon-get" class="method get">GET</a><code class="uri">/coupons</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/coupons</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>name</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Test Coupon</span></span><p>Filter by Coupon Name.</p>
                                </dd><dt>limit</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>30</span></span><p>The default limit value is <code>30</code>.</p>
                                </dd><dt>offset</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>0</span></span><p>The default offset value is <code>0</code>.</p>
                                </dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"GET"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/coupons"</span></span>,
    "<span class="hljs-attribute">limit</span>": <span class="hljs-value"><span class="hljs-number">30</span></span>,
    "<span class="hljs-attribute">offset</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">total</span>": <span class="hljs-value"><span class="hljs-number">2</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">290</span></span>,
      "<span class="hljs-attribute">admin_id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Test Coupon 02"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"This is test coupon."</span></span>,
      "<span class="hljs-attribute">discount_type</span>": <span class="hljs-value"><span class="hljs-string">"percentage"</span></span>,
      "<span class="hljs-attribute">amount</span>": <span class="hljs-value"><span class="hljs-number">10</span></span>,
      "<span class="hljs-attribute">image_url</span>": <span class="hljs-value"><span class="hljs-string">"https://s3-ap-northeast-1.amazonaws.com/coupon.stage.image/photos/290/001.jpg"</span></span>,
      "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">23334</span></span>,
      "<span class="hljs-attribute">start_datetime</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-10 08:00:00"</span></span>,
      "<span class="hljs-attribute">end_datetime</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-30 23:59:59"</span></span>,
      "<span class="hljs-attribute">coupon_type</span>": <span class="hljs-value"><span class="hljs-string">"public"</span></span>,
      "<span class="hljs-attribute">used_count</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span></span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span>
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">289</span></span>,
      "<span class="hljs-attribute">admin_id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Test Coupon 01"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"This is test coupon."</span></span>,
      "<span class="hljs-attribute">discount_type</span>": <span class="hljs-value"><span class="hljs-string">"percentage"</span></span>,
      "<span class="hljs-attribute">amount</span>": <span class="hljs-value"><span class="hljs-number">10</span></span>,
      "<span class="hljs-attribute">image_url</span>": <span class="hljs-value"><span class="hljs-string">"https://s3-ap-northeast-1.amazonaws.com/coupon.stage.image/photos/290/001.jpg"</span></span>,
      "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">23334</span></span>,
      "<span class="hljs-attribute">start_datetime</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-10 08:00:00"</span></span>,
      "<span class="hljs-attribute">end_datetime</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-30 23:59:59"</span></span>,
      "<span class="hljs-attribute">coupon_type</span>": <span class="hljs-value"><span class="hljs-string">"private"</span></span>,
      "<span class="hljs-attribute">used_count</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span></span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span>
    </span>}
  ]</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.022</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="coupon-retrieve-a-coupon" class="resource"><h3 class="resource-heading">Retrieve a coupon <a href="#coupon-retrieve-a-coupon" class="permalink">&nbsp;&para;</a></h3><p>Retrieve a coupon.</p>
                    <div id="coupon-retrieve-a-coupon-get" class="action get"><h4 class="action-heading"><div class="name"></div><a href="#coupon-retrieve-a-coupon-get" class="method get">GET</a><code class="uri">/coupons/:id</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/coupons/:id</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>int</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1</span></span><p>A primary ID of the coupon.</p>
                                </dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"GET"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/coupons/2"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">2</span></span>,
    "<span class="hljs-attribute">admin_id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Test Coupon 01"</span></span>,
    "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"This is test coupon."</span></span>,
    "<span class="hljs-attribute">discount_type</span>": <span class="hljs-value"><span class="hljs-string">"percentage"</span></span>,
    "<span class="hljs-attribute">amount</span>": <span class="hljs-value"><span class="hljs-number">10</span></span>,
    "<span class="hljs-attribute">image_url</span>": <span class="hljs-value"><span class="hljs-string">"https://s3-ap-northeast-1.amazonaws.com/coupon.stage.image/photos/290/001.jpg"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">23334</span></span>,
    "<span class="hljs-attribute">start_datetime</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-10 08:00:00"</span></span>,
    "<span class="hljs-attribute">end_datetime</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-30 23:59:59"</span></span>,
    "<span class="hljs-attribute">coupon_type</span>": <span class="hljs-value"><span class="hljs-string">"public"</span></span>,
    "<span class="hljs-attribute">used_count</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span>
  </span>}</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.013</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>404</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"GET"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/coupon/298"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The resource that matches the request ID does not found."</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404002</span>
  </span>}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.827</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="coupon-create-a-coupon" class="resource"><h3 class="resource-heading">Create a coupon <a href="#coupon-create-a-coupon" class="permalink">&nbsp;&para;</a></h3><p>Create a coupon.</p>
                    <div id="coupon-create-a-coupon-post" class="action post"><h4 class="action-heading"><div class="name"></div><a href="#coupon-create-a-coupon-post" class="method post">POST</a><code class="uri">/coupons</code></h4><h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/coupons</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>name</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>coupon one</span></span><p>Coupon name.</p>
                                </dd><dt>description</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>coupon description</span></span><p>description of coupon.</p>
                                </dd><dt>discount_type</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>percentage</span></span><p>discount type of coupon. (This value allow only <code>percentage</code> or <code>fix-amount</code>)</p>
                                </dd><dt>amount</dt><dd><code>int</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>100</span></span><p>amount of discount value.</p>
                                </dd><dt>image_url</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>null</span></span><p>Coupon image s3 storage url link.</p>
                                </dd><dt>code</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>8332</span></span><p>Coupon code.</p>
                                </dd><dt>start_datetime</dt><dd><code>datetime</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>2020-10-10 09:00:00</span></span><p>coupon available start datetime.</p>
                                </dd><dt>end_datetime</dt><dd><code>datetime</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>2020-10-30 23:59:59</span></span><p>coupon available end datetime.</p>
                                </dd><dt>coupon_type</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>public</span></span><p>types of coupon. (This value allow only <code>public</code> or <code>private</code>) Default is <code>public</code>.</p>
                                </dd><dt>used_count</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1</span></span><p>Allow coupon use count. (If value is 1, user can use only one time)</p>
                                </dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>201</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">201</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"POST"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/coupons"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">17</span>
  </span>}</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.06</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>400</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><div class="description"><p>An error has occurred while validation.</p>
                                </div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"POST"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/coupons"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The request parameters are incorrect, please make sure to follow the documentation about request parameters of the resource."</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400002</span></span>,
    "<span class="hljs-attribute">validation</span>": <span class="hljs-value">[
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"name"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"required"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The name field is required."</span>
          </span>},
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"max"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The name may not be greater than 128 characters."</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"discount_type"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"invalid"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The selected discount type is invalid."</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"amount"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The amount must be integer."</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"code"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The code must be integer."</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"start_datetime"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"invalid"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The start datetime must be datetime format"</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"end_datetime"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"invalid"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The end datetime must be must be datetime format"</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"coupon_type"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"invalid"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The selected coupon type is invalid."</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"used_count"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The used count must be integer."</span>
          </span>}
        ]
      </span>}
    ]
  </span>}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.884</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="coupon-update-coupon" class="resource"><h3 class="resource-heading">Update coupon <a href="#coupon-update-coupon" class="permalink">&nbsp;&para;</a></h3><p>Update a coupon that correspond to the id.</p>
                    <div id="coupon-update-coupon-put" class="action put"><h4 class="action-heading"><div class="name"></div><a href="#coupon-update-coupon-put" class="method put">PUT</a><code class="uri">/coupons/:id</code></h4><h4>Example URI</h4><div class="definition"><span class="method put">PUT</span>&nbsp;<span class="uri"><span class="hostname"></span>/coupons/:id</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>name</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>coupon one</span></span><p>Coupon name.</p>
                                </dd><dt>description</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>coupon description</span></span><p>description of coupon.</p>
                                </dd><dt>discount_type</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>percentage</span></span><p>discount type of coupon. (This value allow only <code>percentage</code> or <code>fix-amount</code>).</p>
                                </dd><dt>amount</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>100</span></span><p>amount of discount value.</p>
                                </dd><dt>image_url</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>null</span></span><p>Coupon image s3 storage url link.</p>
                                </dd><dt>code</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>8332</span></span><p>Coupon code.</p>
                                </dd><dt>start_datetime</dt><dd><code>datetime</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>2020-10-10 09:00:00</span></span><p>coupon available start datetime.</p>
                                </dd><dt>end_datetime</dt><dd><code>datetime</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>2020-10-30 23:59:59</span></span><p>coupon available end datetime.</p>
                                </dd><dt>coupon_type</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>public</span></span><p>types of coupon. (This value allow only <code>public</code> or <code>private</code>) Default is <code>public</code>.</p>
                                </dd><dt>used_count</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1</span></span><p>Allow coupon use count. (If value is 1, user can use only one time)</p>
                                </dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"PUT"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/coupons/325"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">updated</span>": <span class="hljs-value"><span class="hljs-number">1</span>
  </span>}</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.003</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>400</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><div class="description"><p>An error has occurred while validation.</p>
                                </div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"PUT"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/coupons"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The request parameters are incorrect, please make sure to follow the documentation about request parameters of the resource."</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400002</span></span>,
    "<span class="hljs-attribute">validation</span>": <span class="hljs-value">[
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"name"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"max"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The name may not be greater than 128 characters."</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"discount_type"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"invalid"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The selected discount type is invalid."</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"amount"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The amount must be integer."</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"code"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The code must be integer."</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"start_datetime"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"invalid"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The start datetime must be datetime format"</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"end_datetime"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"invalid"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The end datetime must be must be datetime format"</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"coupon_type"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"invalid"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The selected coupon type is invalid."</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"used_count"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The used count must be integer."</span>
          </span>}
        ]
      </span>}
    ]
  </span>}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.884</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>404</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"PUT"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/coupons/222222"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The updating resource that corresponds to the ID wasn't found."</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404003</span>
  </span>}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.026</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="coupon-delete-a-coupon" class="resource"><h3 class="resource-heading">Delete a Coupon <a href="#coupon-delete-a-coupon" class="permalink">&nbsp;&para;</a></h3><p>Delete a coupon that corresponds to the ID as last segment of the URL.</p>
                    <div id="coupon-delete-a-coupon-delete" class="action delete"><h4 class="action-heading"><div class="name"></div><a href="#coupon-delete-a-coupon-delete" class="method delete">DELETE</a><code class="uri">/coupon/{id}</code></h4><h4>Example URI</h4><div class="definition"><span class="method delete">DELETE</span>&nbsp;<span class="uri"><span class="hostname"></span>/coupon/<span class="hljs-attribute" title="id">4</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>int</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>4</span></span><p>A primary ID of the coupon.</p>
                                </dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"DELETE"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/coupon/4"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">deleted</span>": <span class="hljs-value"><span class="hljs-number">1</span>
  </span>}</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.017</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>404</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><div class="description"><p>Response 404 will be returned, if there are no coupon specified.</p>
                                </div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"DELETE"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/coupon/12345"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The deleting resource that corresponds to the ID wasn't found."</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404004</span>
  </span>}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.117</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></section><section id="shops" class="resource-group"><h2 class="group-heading">Shops <a href="#shops" class="permalink">&para;</a></h2><p>The endpoint control the shop resource.</p>
                <div id="shops-retrieve-shops" class="resource"><h3 class="resource-heading">Retrieve Shops <a href="#shops-retrieve-shops" class="permalink">&nbsp;&para;</a></h3><p>Retrieve the the list of shops.</p>
                    <div id="shops-retrieve-shops-get" class="action get"><h4 class="action-heading"><div class="name"></div><a href="#shops-retrieve-shops-get" class="method get">GET</a><code class="uri">/shops</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/shops</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>name</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>shop one</span></span><p>Filter by Shop name.</p>
                                </dd><dt>limit</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>30</span></span><p>The default limit value is <code>30</code>.</p>
                                </dd><dt>offset</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>0</span></span><p>The default offset value is <code>0</code>.</p>
                                </dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"GET"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/shops"</span></span>,
    "<span class="hljs-attribute">limit</span>": <span class="hljs-value"><span class="hljs-number">30</span></span>,
    "<span class="hljs-attribute">offset</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">total</span>": <span class="hljs-value"><span class="hljs-number">2</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">170</span></span>,
      "<span class="hljs-attribute">admin_id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"SEVEN ELEVEN"</span></span>,
      "<span class="hljs-attribute">query</span>": <span class="hljs-value"><span class="hljs-string">"shops"</span></span>,
      "<span class="hljs-attribute">latitude</span>": <span class="hljs-value"><span class="hljs-string">"44.968046"</span></span>,
      "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-string">"-94.420307"</span></span>,
      "<span class="hljs-attribute">zoom</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span></span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span>
    </span>},
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">171</span></span>,
      "<span class="hljs-attribute">admin_id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"AOEN"</span></span>,
      "<span class="hljs-attribute">query</span>": <span class="hljs-value"><span class="hljs-string">"shops"</span></span>,
      "<span class="hljs-attribute">latitude</span>": <span class="hljs-value"><span class="hljs-string">"33.844843"</span></span>,
      "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-string">"-116.54911"</span></span>,
      "<span class="hljs-attribute">zoom</span>": <span class="hljs-value"><span class="hljs-number">3</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span></span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span>
    </span>}
  ]</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.022</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="shops-retrieve-a-shop" class="resource"><h3 class="resource-heading">Retrieve a Shop <a href="#shops-retrieve-a-shop" class="permalink">&nbsp;&para;</a></h3><p>Retrieve a shop.</p>
                    <div id="shops-retrieve-a-shop-get" class="action get"><h4 class="action-heading"><div class="name"></div><a href="#shops-retrieve-a-shop-get" class="method get">GET</a><code class="uri">/shop/:id</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/shop/:id</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>int</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1</span></span><p>A primary ID of the shop.</p>
                                </dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"GET"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/shops/170"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">170</span></span>,
    "<span class="hljs-attribute">admin_id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"SEVEN ELEVEN"</span></span>,
    "<span class="hljs-attribute">query</span>": <span class="hljs-value"><span class="hljs-string">"shops"</span></span>,
    "<span class="hljs-attribute">latitude</span>": <span class="hljs-value"><span class="hljs-string">"44.968046"</span></span>,
    "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-string">"-94.420307"</span></span>,
    "<span class="hljs-attribute">zoom</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span>
  </span>}</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.013</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>404</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"GET"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/shops/278"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The resource that matches the request ID does not found."</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404002</span>
  </span>}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.827</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="shops-create-a-shop" class="resource"><h3 class="resource-heading">Create a Shop <a href="#shops-create-a-shop" class="permalink">&nbsp;&para;</a></h3><p>Create a Shop.</p>
                    <div id="shops-create-a-shop-post" class="action post"><h4 class="action-heading"><div class="name"></div><a href="#shops-create-a-shop-post" class="method post">POST</a><code class="uri">/shops</code></h4><h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/shops</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>name</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>AEON</span></span><p>Shop Name.</p>
                                </dd><dt>query</dt><dd><code>sting</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>shops</span></span><p>Shop Query.</p>
                                </dd><dt>latitude</dt><dd><code>decimal</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>44.968046</span></span><p>Shop Latitude.</p>
                                </dd><dt>longitude</dt><dd><code>decimal</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>-94.420307</span></span><p>Shop Longitude.</p>
                                </dd><dt>zoom</dt><dd><code>sting</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>2</span></span><p>Shop Zoom.</p>
                                </dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>201</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">201</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"POST"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/shops"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">29</span>
  </span>}</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.06</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>400</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><div class="description"><p>An error has occurred while validation.</p>
                                </div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"POST"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/shops"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The request parameters are incorrect, please make sure to follow the documentation about request parameters of the resource."</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400002</span></span>,
    "<span class="hljs-attribute">validation</span>": <span class="hljs-value">[
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"name"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"max"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The name may not be greater than 64 characters."</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"query"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"max"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The name may not be greater than 64 characters."</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"latitude"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The latitude must be integer."</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"longitude"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The longitude must be integer."</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"zoom"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The zoom must be integer."</span>
          </span>}
        ]
      </span>}
    ]
  </span>}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.884</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="shops-update-shop" class="resource"><h3 class="resource-heading">Update Shop <a href="#shops-update-shop" class="permalink">&nbsp;&para;</a></h3><p>Update a Shop that correspond to the id.</p>
                    <div id="shops-update-shop-put" class="action put"><h4 class="action-heading"><div class="name"></div><a href="#shops-update-shop-put" class="method put">PUT</a><code class="uri">/shops/:id</code></h4><h4>Example URI</h4><div class="definition"><span class="method put">PUT</span>&nbsp;<span class="uri"><span class="hostname"></span>/shops/:id</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>int</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1</span></span><p>A primary ID of the related-ticket.</p>
                                </dd><dt>name</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>AEON</span></span><p>Shop Name.</p>
                                </dd><dt>query</dt><dd><code>sting</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>shops</span></span><p>Shop Query.</p>
                                </dd><dt>latitude</dt><dd><code>decimal</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>44.968046</span></span><p>Shop Latitude.</p>
                                </dd><dt>longitude</dt><dd><code>decimal</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>-94.420307</span></span><p>Shop Longitude.</p>
                                </dd><dt>zoom</dt><dd><code>sting</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>2</span></span><p>Shop Zoom.</p>
                                </dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"PUT"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/shops/121"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">updated</span>": <span class="hljs-value"><span class="hljs-number">1</span>
  </span>}</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.003</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>400</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><div class="description"><p>An error has occurred while validation.</p>
                                </div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"PUT"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/shops/290"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The request parameters are incorrect, please make sure to follow the documentation about request parameters of the resource."</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400002</span></span>,
    "<span class="hljs-attribute">validation</span>": <span class="hljs-value">[
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"name"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"max"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The name may not be greater than 64 characters."</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"query"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"max"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The name may not be greater than 64 characters."</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"latitude"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The latitude must be integer."</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"longitude"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The longitude must be integer."</span>
          </span>}
        ]
      </span>},
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"zoom"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The zoom must be integer."</span>
          </span>}
        ]
      </span>}
    ]
  </span>}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.884</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>404</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"PUT"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/shops/222222"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The updating resource that corresponds to the ID wasn't found."</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404003</span>
  </span>}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.026</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="shops-delete-a-shop" class="resource"><h3 class="resource-heading">Delete a Shop <a href="#shops-delete-a-shop" class="permalink">&nbsp;&para;</a></h3><p>Delete a Shop that corresponds to the ID as last segment of the URL.</p>
                    <div id="shops-delete-a-shop-delete" class="action delete"><h4 class="action-heading"><div class="name"></div><a href="#shops-delete-a-shop-delete" class="method delete">DELETE</a><code class="uri">/shops/{id}</code></h4><h4>Example URI</h4><div class="definition"><span class="method delete">DELETE</span>&nbsp;<span class="uri"><span class="hostname"></span>/shops/<span class="hljs-attribute" title="id">1</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>int</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1</span></span><p>A primary ID of the shop.</p>
                                </dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"DELETE"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/shops/4"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">deleted</span>": <span class="hljs-value"><span class="hljs-number">1</span>
  </span>}</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.017</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>404</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><div class="description"><p>Response 404 will be returned, if there are no shop specified.</p>
                                </div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"DELETE"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/shops/12345"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The deleting resource that corresponds to the ID wasn't found."</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404004</span>
  </span>}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.117</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></section><section id="couponshops" class="resource-group"><h2 class="group-heading">CouponShops <a href="#couponshops" class="permalink">&para;</a></h2><p>The endpoint control the shop resource belongs the coupon specified by couponId.</p>
                <div id="couponshops-retrieve-couponshops" class="resource"><h3 class="resource-heading">Retrieve CouponShops <a href="#couponshops-retrieve-couponshops" class="permalink">&nbsp;&para;</a></h3><p>Retrieve the the list of couponShops.</p>
                    <div id="couponshops-retrieve-couponshops-get" class="action get"><h4 class="action-heading"><div class="name"></div><a href="#couponshops-retrieve-couponshops-get" class="method get">GET</a><code class="uri">/coupons/:coupon_id/shops</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/coupons/:coupon_id/shops</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>coupon_id</dt><dd><code>integer</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>290</span></span><p>Filter by Coupon Id.</p>
                                </dd><dt>limit</dt><dd><code>integer</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>30</span></span><p>The default limit value is <code>30</code>.</p>
                                </dd><dt>offset</dt><dd><code>integer</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>0</span></span><p>The default offset value is <code>0</code>.</p>
                                </dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"GET"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/coupons/290/shops"</span></span>,
    "<span class="hljs-attribute">limit</span>": <span class="hljs-value"><span class="hljs-number">30</span></span>,
    "<span class="hljs-attribute">offset</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">total</span>": <span class="hljs-value"><span class="hljs-number">2</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">290</span></span>,
      "<span class="hljs-attribute">admin_id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Test Coupon 01"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"This is test coupon."</span></span>,
      "<span class="hljs-attribute">discount_type</span>": <span class="hljs-value"><span class="hljs-string">"percentage"</span></span>,
      "<span class="hljs-attribute">amount</span>": <span class="hljs-value"><span class="hljs-number">10</span></span>,
      "<span class="hljs-attribute">image_url</span>": <span class="hljs-value"><span class="hljs-string">"https://s3-ap-northeast-1.amazonaws.com/coupon.stage.image/photos/290/001.jpg"</span></span>,
      "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">23334</span></span>,
      "<span class="hljs-attribute">start_datetime</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-10 08:00:00"</span></span>,
      "<span class="hljs-attribute">end_datetime</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-30 23:59:59"</span></span>,
      "<span class="hljs-attribute">coupon_type</span>": <span class="hljs-value"><span class="hljs-string">"public"</span></span>,
      "<span class="hljs-attribute">used_count</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span></span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span></span>,
      "<span class="hljs-attribute">shops</span>": <span class="hljs-value">[
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">130</span></span>,
          "<span class="hljs-attribute">admin_id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"SEVEN ELEVEN"</span></span>,
          "<span class="hljs-attribute">query</span>": <span class="hljs-value"><span class="hljs-string">"shops"</span></span>,
          "<span class="hljs-attribute">latitude</span>": <span class="hljs-value"><span class="hljs-string">"44.968046"</span></span>,
          "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-string">"-94.420307"</span></span>,
          "<span class="hljs-attribute">zoom</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span>
        </span>},
        {
          "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">131</span></span>,
          "<span class="hljs-attribute">admin_id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
          "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"AOEN"</span></span>,
          "<span class="hljs-attribute">query</span>": <span class="hljs-value"><span class="hljs-string">"shops"</span></span>,
          "<span class="hljs-attribute">latitude</span>": <span class="hljs-value"><span class="hljs-string">"33.844843"</span></span>,
          "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-string">"-116.54911"</span></span>,
          "<span class="hljs-attribute">zoom</span>": <span class="hljs-value"><span class="hljs-number">3</span></span>,
          "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span></span>,
          "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span>
        </span>}
      ]
    </span>}
  ]</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.022</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="couponshops-retrieve-couponshops-1" class="resource"><h3 class="resource-heading">Retrieve CouponShops <a href="#couponshops-retrieve-couponshops-1" class="permalink">&nbsp;&para;</a></h3><p>Retrieve a couponShop.</p>
                    <div id="couponshops-retrieve-couponshops-get-1" class="action get"><h4 class="action-heading"><div class="name"></div><a href="#couponshops-retrieve-couponshops-get-1" class="method get">GET</a><code class="uri">/coupons/:coupon_id/shops/:shop_id</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/coupons/:coupon_id/shops/:shop_id</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>coupon_id</dt><dd><code>integer</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>290</span></span><p>Filter by Coupon Id.</p>
                                </dd><dt>shop_id</dt><dd><code>integer</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>130</span></span><p>Filter by Shop Id.</p>
                                </dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"GET"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/coupons/290/shops/130"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">290</span></span>,
    "<span class="hljs-attribute">admin_id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Test Coupon 01"</span></span>,
    "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"This is test coupon."</span></span>,
    "<span class="hljs-attribute">discount_type</span>": <span class="hljs-value"><span class="hljs-string">"percentage"</span></span>,
    "<span class="hljs-attribute">amount</span>": <span class="hljs-value"><span class="hljs-number">10</span></span>,
    "<span class="hljs-attribute">image_url</span>": <span class="hljs-value"><span class="hljs-string">"https://s3-ap-northeast-1.amazonaws.com/coupon.stage.image/photos/290/001.jpg"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">23334</span></span>,
    "<span class="hljs-attribute">start_datetime</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-10 08:00:00"</span></span>,
    "<span class="hljs-attribute">end_datetime</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-30 23:59:59"</span></span>,
    "<span class="hljs-attribute">coupon_type</span>": <span class="hljs-value"><span class="hljs-string">"public"</span></span>,
    "<span class="hljs-attribute">used_count</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span></span>,
    "<span class="hljs-attribute">shops</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">130</span></span>,
      "<span class="hljs-attribute">admin_id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"SEVEN ELEVEN"</span></span>,
      "<span class="hljs-attribute">query</span>": <span class="hljs-value"><span class="hljs-string">"shops"</span></span>,
      "<span class="hljs-attribute">latitude</span>": <span class="hljs-value"><span class="hljs-string">"44.968046"</span></span>,
      "<span class="hljs-attribute">longitude</span>": <span class="hljs-value"><span class="hljs-string">"-94.420307"</span></span>,
      "<span class="hljs-attribute">zoom</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span></span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"2020-10-01 17:47:00"</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.022</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="couponshops-create-a-couponshop" class="resource"><h3 class="resource-heading">Create a CouponShop <a href="#couponshops-create-a-couponshop" class="permalink">&nbsp;&para;</a></h3><p>Create a Coupon shop.</p>
                    <div id="couponshops-create-a-couponshop-post" class="action post"><h4 class="action-heading"><div class="name"></div><a href="#couponshops-create-a-couponshop-post" class="method post">POST</a><code class="uri">/coupons/:coupon_id/shops</code></h4><h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/coupons/:coupon_id/shops</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>coupon_id</dt><dd><code>int</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>290</span></span><p>Coupon Id.</p>
                                </dd><dt>shop_id</dt><dd><code>int</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1</span></span><p>Shop Id.</p>
                                </dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>201</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">201</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"POST"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/coupons/290/shops"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">29</span>
  </span>}</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.06</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>400</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><div class="description"><p>An error has occurred while validation.</p>
                                </div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"POST"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/coupons/290/shops"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The request parameters are incorrect, please make sure to follow the documentation about request parameters of the resource."</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400002</span></span>,
    "<span class="hljs-attribute">validation</span>": <span class="hljs-value">[
      {
        "<span class="hljs-attribute">attribute</span>": <span class="hljs-value"><span class="hljs-string">"shop_id"</span></span>,
        "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"required"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The shop id field is required."</span>
          </span>},
          {
            "<span class="hljs-attribute">key</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The shop id must be integer."</span>
          </span>}
        ]
      </span>}
    ]
  </span>}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.884</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>409</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><div class="description"><p>An error has occurred while The inserting resource was already registered.</p>
                                </div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">409</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"POST"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/coupons/1/shops"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The inserting resource was already registered."</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">409001</span>
  </span>}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.313</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>404</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><div class="description"><p>An error has occurred while The inserting resource was already registered.</p>
                                </div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"POST"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/coupons/11234/shops"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The parent resource of corresponding to the given ID was not found."</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404005</span>
  </span>}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.145</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="couponshops-delete-a-couponshop" class="resource"><h3 class="resource-heading">Delete a CouponShop <a href="#couponshops-delete-a-couponshop" class="permalink">&nbsp;&para;</a></h3><p>Delete a CouponShop that corresponds to the ID as last segment of the URL.</p>
                    <div id="couponshops-delete-a-couponshop-delete" class="action delete"><h4 class="action-heading"><div class="name"></div><a href="#couponshops-delete-a-couponshop-delete" class="method delete">DELETE</a><code class="uri">/coupons/:coupon_id/shops/:id</code></h4><h4>Example URI</h4><div class="definition"><span class="method delete">DELETE</span>&nbsp;<span class="uri"><span class="hostname"></span>/coupons/:coupon_id/shops/:id</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>coupon_id</dt><dd><code>int</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>4</span></span><p>A primary ID of the coupon.</p>
                                </dd><dt>id</dt><dd><code>int</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>5</span></span><p>A primary ID of the couponShop.</p>
                                </dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"DELETE"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/coupon/4/shops/5"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">deleted</span>": <span class="hljs-value"><span class="hljs-number">1</span>
  </span>}</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.017</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>404</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><div class="description"><p>Response 404 will be returned, if there are no couponShop specified.</p>
                                </div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json; charset=utf-8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">meta</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">method</span>": <span class="hljs-value"><span class="hljs-string">"DELETE"</span></span>,
    "<span class="hljs-attribute">endpoint</span>": <span class="hljs-value"><span class="hljs-string">"1/coupons/4/shops/12345"</span>
  </span>}</span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"The deleting resource that corresponds to the ID wasn't found."</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404004</span>
  </span>}</span>,
  "<span class="hljs-attribute">duration</span>": <span class="hljs-value"><span class="hljs-number">0.117</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></section></div></div></div><p style="text-align: center;" class="text-muted">Generated by&nbsp;<a href="https://github.com/danielgtaylor/aglio" class="aglio">aglio</a>&nbsp;on 23 Dec 2020</p><script>/* eslint-env browser */
    /* eslint quotes: [2, "single"] */
    'use strict';

    /*
      Determine if a string ends with another string.
    */
    function endsWith(str, suffix) {
        return str.indexOf(suffix, str.length - suffix.length) !== -1;
    }

    /*
      Get a list of direct child elements by class name.
    */
    function childrenByClass(element, name) {
        var filtered = [];

        for (var i = 0; i < element.children.length; i++) {
            var child = element.children[i];
            var classNames = child.className.split(' ');
            if (classNames.indexOf(name) !== -1) {
                filtered.push(child);
            }
        }

        return filtered;
    }

    /*
      Get an array [width, height] of the window.
    */
    function getWindowDimensions() {
        var w = window,
            d = document,
            e = d.documentElement,
            g = d.body,
            x = w.innerWidth || e.clientWidth || g.clientWidth,
            y = w.innerHeight || e.clientHeight || g.clientHeight;

        return [x, y];
    }

    /*
      Collapse or show a request/response example.
    */
    function toggleCollapseButton(event) {
        var button = event.target.parentNode;
        var content = button.parentNode.nextSibling;
        var inner = content.children[0];

        if (button.className.indexOf('collapse-button') === -1) {
            // Clicked without hitting the right element?
            return;
        }

        if (content.style.maxHeight && content.style.maxHeight !== '0px') {
            // Currently showing, so let's hide it
            button.className = 'collapse-button';
            content.style.maxHeight = '0px';
        } else {
            // Currently hidden, so let's show it
            button.className = 'collapse-button show';
            content.style.maxHeight = inner.offsetHeight + 12 + 'px';
        }
    }

    function toggleTabButton(event) {
        var i, index;
        var button = event.target;

        // Get index of the current button.
        var buttons = childrenByClass(button.parentNode, 'tab-button');
        for (i = 0; i < buttons.length; i++) {
            if (buttons[i] === button) {
                index = i;
                button.className = 'tab-button active';
            } else {
                buttons[i].className = 'tab-button';
            }
        }

        // Hide other tabs and show this one.
        var tabs = childrenByClass(button.parentNode.parentNode, 'tab');
        for (i = 0; i < tabs.length; i++) {
            if (i === index) {
                tabs[i].style.display = 'block';
            } else {
                tabs[i].style.display = 'none';
            }
        }
    }

    /*
      Collapse or show a navigation menu. It will not be hidden unless it
      is currently selected or `force` has been passed.
    */
    function toggleCollapseNav(event, force) {
        var heading = event.target.parentNode;
        var content = heading.nextSibling;
        var inner = content.children[0];

        if (heading.className.indexOf('heading') === -1) {
            // Clicked without hitting the right element?
            return;
        }

        if (content.style.maxHeight && content.style.maxHeight !== '0px') {
            // Currently showing, so let's hide it, but only if this nav item
            // is already selected. This prevents newly selected items from
            // collapsing in an annoying fashion.
            if (force || window.location.hash && endsWith(event.target.href, window.location.hash)) {
                content.style.maxHeight = '0px';
            }
        } else {
            // Currently hidden, so let's show it
            content.style.maxHeight = inner.offsetHeight + 12 + 'px';
        }
    }

    /*
      Refresh the page after a live update from the server. This only
      works in live preview mode (using the `--server` parameter).
    */
    function refresh(body) {
        document.querySelector('body').className = 'preload';
        document.body.innerHTML = body;

        // Re-initialize the page
        init();
        autoCollapse();

        document.querySelector('body').className = '';
    }

    /*
      Determine which navigation items should be auto-collapsed to show as many
      as possible on the screen, based on the current window height. This also
      collapses them.
    */
    function autoCollapse() {
        var windowHeight = getWindowDimensions()[1];
        var itemsHeight = 64; /* Account for some padding */
        var itemsArray = Array.prototype.slice.call(
            document.querySelectorAll('nav .resource-group .heading'));

        // Get the total height of the navigation items
        itemsArray.forEach(function (item) {
            itemsHeight += item.parentNode.offsetHeight;
        });

        // Should we auto-collapse any nav items? Try to find the smallest item
        // that can be collapsed to show all items on the screen. If not possible,
        // then collapse the largest item and do it again. First, sort the items
        // by height from smallest to largest.
        var sortedItems = itemsArray.sort(function (a, b) {
            return a.parentNode.offsetHeight - b.parentNode.offsetHeight;
        });

        while (sortedItems.length && itemsHeight > windowHeight) {
            for (var i = 0; i < sortedItems.length; i++) {
                // Will collapsing this item help?
                var itemHeight = sortedItems[i].nextSibling.offsetHeight;
                if ((itemsHeight - itemHeight <= windowHeight) || i === sortedItems.length - 1) {
                    // It will, so let's collapse it, remove its content height from
                    // our total and then remove it from our list of candidates
                    // that can be collapsed.
                    itemsHeight -= itemHeight;
                    toggleCollapseNav({target: sortedItems[i].children[0]}, true);
                    sortedItems.splice(i, 1);
                    break;
                }
            }
        }
    }

    /*
      Initialize the interactive functionality of the page.
    */
    function init() {
        var i, j;

        // Make collapse buttons clickable
        var buttons = document.querySelectorAll('.collapse-button');
        for (i = 0; i < buttons.length; i++) {
            buttons[i].onclick = toggleCollapseButton;

            // Show by default? Then toggle now.
            if (buttons[i].className.indexOf('show') !== -1) {
                toggleCollapseButton({target: buttons[i].children[0]});
            }
        }

        var responseCodes = document.querySelectorAll('.example-names');
        for (i = 0; i < responseCodes.length; i++) {
            var tabButtons = childrenByClass(responseCodes[i], 'tab-button');
            for (j = 0; j < tabButtons.length; j++) {
                tabButtons[j].onclick = toggleTabButton;

                // Show by default?
                if (j === 0) {
                    toggleTabButton({target: tabButtons[j]});
                }
            }
        }

        // Make nav items clickable to collapse/expand their content.
        var navItems = document.querySelectorAll('nav .resource-group .heading');
        for (i = 0; i < navItems.length; i++) {
            navItems[i].onclick = toggleCollapseNav;

            // Show all by default
            toggleCollapseNav({target: navItems[i].children[0]});
        }
    }

    // Initial call to set up buttons
    init();

    window.onload = function () {
        autoCollapse();
        // Remove the `preload` class to enable animations
        document.querySelector('body').className = '';
    };
</script></body></html>