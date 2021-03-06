=== QQWorld Auto Save Images ===
Contributors: qqworld
Donate link: https://www.qqworld.org
Tags: auto, save, local, fetch, images
Requires at least: 3.5
Tested up to: 5.2.1
Requires PHP: 5.3
Stable tag: 1.9.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Automatically keep the all remote picture to the local media libary when you publishing posts, and automatically set featured image.

== Description ==

Automatically keep the all remote picture to the local media libary when you publishing posts, and automatically set featured image.

And more powerful functional is waiting for you. What exactly is it? Hehe...

<h4>Notice:</h4>
<ul>
	<li>This plugin has a little problem that is all the image url must be full url, it means must included "http(s)://", for example:
		<ul>
			<li>&lt;img src=&quot;http://img.whitehouse.gov/image/2014/08/09/gogogo.jpg&quot; /&gt;</li>
			<li>&lt;img src=&quot;http://www.bubugao.me/image/travel/beijing.png?date=20140218&quot; /&gt;</li>
			<li>&lt;img src=&quot;http://r4.ykimg.com/05410408543927D66A0B4D03A98AED24&quot; /&gt;</li>
			<li>&lt;img src=&quot;https://example.com/image?id=127457&quot; /&gt;</li>
		</ul>
	</li>
	<li>The examples that not works:
		<ul>
			<li>&lt;img src=&quot;/images/great.png&quot; /&gt;</li>
			<li>&lt;img src=&quot;./photo-lab/2014-08-09.jpg&quot; /&gt;</li>
			<li>&lt;img src=&quot;img/background/black.gif&quot; /&gt;</li>
		</ul>
	</li>
</ul>
I'v tried to figure this out, but i couldn't get the host name to make image src full.

So if you encounter these codes, plaese manually fix the images src to full url.

Good News: Professional Edition has able to fix this.

<h4>Compatibility with</h4>
<a href="https://wordpress.org/plugins/custom-upload-dir/">Custom Upload Dir</a>

<h4>Plugin's Plugins</h4>
<a href="https://wordpress.org/plugins/grabber-for-qqworld-auto-save-images/">Grabber for QQWorld Auto Save Images</a>: Grab PDF.

<h4>Professional Edition</h4>
<p>Features of Pro Edition</p>
<ul>
	
	<li>Automatically delete the HTML code of remote images smaller than Minimum-Picture-Size.</li>
	<li>Detecting replicated images in media library by Original-link and CRC (Only for new images that after v1.1 updated).</li>
	<li>Automatically exclude specified remote images by CRC.</li>
	<li>Automatically delete html code of specified remote images by CRC.</li>
	<li>New manual mode with multi-thread (Faster than automatic mode and modify Title &amp; Alt in realtime)</li>
	<li>Download Images from WeChat</li>
	<li>Cron Scan Posts</li>
	<li>Watermark</li>
	<li>Images Compression (JPG Only)</li>
	<li>Use Proxy</li>
	<li>Smart Grabbing, Automatically detect 2 images url from href/src of remote image with outside link, and grab the bigger one.</li>
	<li>Use Cookie-Free Domain &amp; CDN Servive (AliYun OSS, UpYun, QiNiu)</li>
	<li>Collect webpage automatically: Easy reprint articles, and get all the images to choose from web pages.</li>
	<li>Translation (Baidu Translation, Google Translation)</li>
	<li>Set no remote images saved into media library, it means would not generate thumbnail with many sizes. but if you checked Set-Featured-Image, the first remote image will be saved into media library.</li>
	<li>Support automatically convert BMP to JPG.</li>
</ul>
Buy: <a href="https://www.qqworld.org/product/qqworld-collector?locale=en_US" target="_blank">QQWorld Collector (USD $18.81-$56.81)</a> | <a href="http://www.qqworld.org/how-to-buy-en?locale=en_US" target="_blank">How to buy?</a> | <a href="https://www.qqworld.org/product-activation-en?locale=en_US" target="_blank" target="_blank">Product Activation</a>

<h4>Don't know Chinese?</h4>
Don't worry, click on this <a href="https://www.qqworld.org/product/qqworld-collector?locale=en_US" target="_blank">link</a> to transfer important content from the website to English and then happily register, purchase and activate the product.

Contact:
E-mail: admin@qqworld.org
QQ: 172269588

////////////////////////////////////////////////////

在发布文章时自动保存远程图片到本地媒体库，自动设置特色图片，并且支持机器人采集软件从外部提交。

还有更强大的功能等着你，到底是什么呢？呵呵……

<h4>注意：</h4>
<ul>
	<li>该插件有个小问题，所有的远程图像的URL必须是完整的，就是说必须得包含"http(s)://"，比如：
		<ul>
			<li>&lt;img src=&quot;http://img.whitehouse.gov/image/2014/08/09/gogogo.jpg&quot; /&gt;</li>
			<li>&lt;img src=&quot;http://www.bubugao.me/image/travel/beijing.png?date=20140218&quot; /&gt;</li>
			<li>&lt;img src=&quot;http://r4.ykimg.com/05410408543927D66A0B4D03A98AED24&quot; /&gt;</li>
			<li>&lt;img src=&quot;https://example.com/image?id=127457&quot; /&gt;</li>
		</ul>
	</li>
	<li>不能保存的例子：
		<ul>
			<li>&lt;img src=&quot;/images/great.png&quot; /&gt;</li>
			<li>&lt;img src=&quot;./photo-lab/2014-08-09.jpg&quot; /&gt;</li>
			<li>&lt;img src=&quot;img/background/black.gif&quot; /&gt;</li>
		</ul>
	</li>
</ul>
我尝试解决这个问题，但是我无法让程序获取到主机名从而让图片的URL完整。

所以，如果你碰到这样的代码，请手动将图片地址改成完整的，或者使用采集工具自动补完图片的URL然后从外部提交给Wordpress。

好消息：专业版可以解决这个问题。

<h4>兼容于其他插件</h4>
<a href="https://wordpress.org/plugins/custom-upload-dir/">Custom Upload Dir</a>

<h4>插件的插件</h4>
<a href="https://wordpress.org/plugins/grabber-for-qqworld-auto-save-images/">QQWorld自动保存图片的捕手</a>：抓取 PDF。

<h4>付费版</h4>
<p>免费版相当于付费版的1个阉割的抓图模块，付费版将为你节约更多的时间。</p>
<ul>
	<li>可选择自动删除小于最小图像尺寸的远程图像HTML代码</li>
	<li>在数据库中通过原链接和CRC检测重复图像（仅用于更新1.1版之后下载的图像）</li>
	<li>可以自动通过检验图像文件CRC忽略指定的远程图像</li>
	<li>可以自动通过检验图像文件CRC删除指定的远程图像HTML代码</li>
	<li>多线程的手动模式（下载速度是自动模式的N倍，且支持即时修改Title和Alt）</li>
	<li>下载微信图片</li>
	<li>定时扫描文章</li>
	<li>水印</li>
	<li>压缩优化图片</li>
	<li>使用代理服务器（可下载需要翻墙的图片）</li>
	<li>智能抓取（从图片src和链接href中提取图片地址，并抓取较大的一个）</li>
	<li>使用Cookie-Free域名和外部存储器（阿里云OSS、七牛云存储、又拍云存储等）</li>
	<li>自动采集功能：轻松转载文章、从网页中获取所有图片供选择</li>
	<li>翻译（百度翻译，谷歌翻译），支持简繁体互转喔！</li>
	<li>可选择不保存图像到媒体库，这意味着不会生成各种尺寸的缩略图，但是如果勾选了自动设置特色图片，则只会将第一幅图片保存到媒体库。</li>
	<li>支持BMP和WEBP转JPG</li>
	<li>...</li>
</ul>
购买：<a href="https://www.qqworld.org/product/qqworld-collector" target="_blank">QQWorld收藏家 (CNY &yen;99-&yen;399)</a> | <a href="https://www.qqworld.org/how-to-buy" target="_blank">如何购买？</a> | <a href="https://www.qqworld.org/product-activation" target="_blank">产品激活</a>

联系方式：
邮件：admin@qqworld.org
QQ：172269588

== Installation ==

<ol>
<li>Make sure the server configuration <strong>allow_url_fopen=1</strong> and remove ";" from in front of <strong>extension=php_gd2.dll</strong> and <strong>extension=php_curl.dll</strong> in php.ini.<br />
请确保php.ini的设置中 <strong>allow_url_fopen=1</strong>，并且去掉<strong>extension=php_gd2.dll</strong>和<strong>extension=php_curl.dll</strong>之前的“;”</li>
<li>Warning: If your website domain has changed, you must modify all image link to new domain from database, or else all images which not modified in post content will be saved again.<br />
警告：如果你的网站域名更改了，必须在数据库中将所有的图片链接更新到新域名，否则插件会把未更改的图片再保存一次。</li>
</ol>

== Screenshots ==

1. User interface - Settings
2. 用户界面 - 设置
3. User interface - Preview watermark feature
4. 用户界面 - 水印功能预览
5. User interface - Scan posts
6. 用户界面 - 扫描文章

== Changelog ==
= 1.9.1 =
Bug fixed: Manual capture will be garbled.<br />
修复Bug：手动抓图乱码

= 1.9 =
New feature: Support for WP 5.0 new editor.<br />
新特性：支持 WP5.0 新编辑器

= 1.8.2 =
Bug fixed: Automatically delete '/' in post content.<br />
修复Bug：修复自动清除内容中的'/'的Bug 

= 1.8.1 =
Bug fixed: Cound not automatic set featrued image on WP 4.6.<br />
修复Bug：WP4.6版上无法自动设置特色图片

= 1.8 =
Bug fixed: Some themes or plugins might cause repeatedly save images.<br />
修复Bug：某些主题或插件可能会导致重复保存图片。

= 1.7.15.6 =
Bug fixed: some bugs.<br />
修复Bug：一些bugs。

= 1.7.15.5 =
New feature: Convert Vietnamese to English letters for automatically change image filename.<br />
新特性：自动更改文件名时自动将越南语字母转换为英语字母

= 1.7.15.4 =
Bug Fixed: Removed unnecessary backslashes escaped.<br />
修Bug：去除不必要的自动反斜线转义。

= 1.7.15.3 =
New feature: Automatically detect uploaded images as featured image.<br />
新特性：自动检测已上传的图像作为特色图片。

= 1.7.15.2 =
New feature: Update the Information of Pro Edition.<br />
新特性：更新专业版信息。

= 1.7.15.1 =
New feature: Supported save remote images via Schedule Publish.<br />
新特性：支持定时发布时保存远程图像。

= 1.7.15 =
<ul>
	<li>New feature:
		<ul>
			<li>Compatibility with Custom Upload Dir.</li>
		</ul>
	</li>
	<li>新特性：
		<ul>
			<li>和Custom Upload Dir兼容。</li>
		</ul>
	</li>
	<li>Bugs Fixed:
		<ul>
			<li>Save duplicate image</li>
			<li>Save duplicate revision post</li>
			<li>String '%20' in class</li>
		</ul>
	</li>
	<li>修复Bug：
		<ul>
			<li>重复保存图片</li>
			<li>重复保存文章历史版本</li>
			<li>在class中有“%20”字符串</li>
		</ul>
	</li>
</ul>

= 1.7.14.1 =
Bug fixed: Couldn't grabbing the image url contain spaces.<br />
修复Bug：不能抓取包含空格的图像url。

= 1.7.14 =
Bug fixed: A bug of regular expression ( '{' & '}' ).<br />
修复Bug：修复正则表达式的bug（ '{' 和 '}' ）。

= 1.7.13.9 =
New feature: Added new format option Align-To<br />
新特性：添加对齐方式的格式化选项。

= 1.7.13.8 =
New feature: Automatically add caption shortcode.<br />
新特性：自动添加图说短代码。

= 1.7.13.7 =
New Interface: Update user interface of Pro Edition<br />
新界面：更新专业版的用户界面

= 1.7.13.6 =
Bug fixed: Couldn't handle the Maximum Image Size of remote image resource by GZIP compressed. (Needs PHP 5.4+)<br />
修复Bug：无法控制被GZIP压缩的图片资源的最大尺寸。(须PHP 5.4+)

= 1.7.13.5 =
New feature: Enhanced ability for grab remote image by GZIP compressed. (Needs PHP 5.4+)<br />
新特性：加强对GZIP压缩的图片资源的抓取功能。(须PHP 5.4+)

= 1.7.13.4 =
New feature: Supply a hook that can custom link text of the outside link or even more complicated.<br />
新特性：提供1个Hook来自定义外部链接的链接文本或更加复杂的内容。。

= 1.7.13.3 =
New feature: Add <strong>rel="nofollow"</strong> into outside link's tag when checked the option Save-Outside-Links.<br />
新特性：当选择保存外部链接时，自动在外部链接的标签中加入<strong>rel="nofollow"。</strong>。<br />
Bug fixed: Manual scan posts can not check missing remote images.<br />
修复Bug：手动扫描文章无法检测丢失的远程图片。

= 1.7.13.2 =
New feature: Add <strong>rel="nofollow"</strong> into outside link's tag when checked the option Keep-Outside-Links.<br />
新特性：当选择保留外部链接时，自动在外部链接的标签中加入<strong>rel="nofollow"。</strong>。

= 1.7.13.1 =
New feature: The feature Maximum-Picture-Size Automatically reduction image size support PHP 5.3 now.<br />
新特性：最大图像尺寸的自动缩小图片功能支持PHP5.3。

= 1.7.13 =
News: QQWorld Auto Save Images Pro Edition is avaliable.<br />
新闻：QQWorld自动保存图片专业版已发售。

= 1.7.12.14 =
New feature:<br />
For plugin working issue, adds server check to help user handle server configuation issues.
<br />
新特性<br />
为了使插件工作正常，增加服务器检测帮助用户处理服务器配置问题

= 1.7.12.13 =
<ul>
	<li>New feature:
		<ul>
			<li>Save first ? image(s) from each posts.</li>
		</ul>
	</li>
	<li>新特性：
		<ul>
			<li>保存每篇文章前 ? 幅图像</li>
		</ul>
	</li>
	<li>Bugs Fixed:
		<ul>
			<li>Keep-outside-links didn't works.</li>
			<li>Allowed "maximum picture size" to set blank.</li>
		</ul>
	</li>
	<li>修复Bug：
		<ul>
			<li>“保留外部链接”无效</li>
			<li>允许“最大图像尺寸”都设置为空白</li>
		</ul>
	</li>
</ul>

= 1.7.12.12 =
New feature:<br />
Automatic change remote filename that have Non-ASCii characters (for Windows Server).<br />
Custom filename structure.<br />
新特性：<br />
自动修改包含非ASCii字符的远程图片文件名（用于Windows服务器）<br />
自定义文件名结构。

= 1.7.12.11 =
New feature:<br />
Supplied some interface for others additional functions.<br />
新特性：<br />
为其他附加功能提供了接口。

= 1.7.12.10 =
Bug Fixed:<br />
Handle missing/undownloadable remote image failed. <br />
修复Bug：<br />
无法处理 不存在/无法下载 的远程图片

= 1.7.12.9 =
New feature:<br />
Automatic save outside links to description of attachments.<br />
新特性：<br />
自动将远程图片的链接保存到附件的描述中。

= 1.7.12.8 =
New feature:<br />
Automatic change attachment url to rewrite permalink.<br />
新特性：<br />
自动将附件的url转换为伪静态固定链接

= 1.7.12.7 =
Bug Fixed:<br />
Broken if the value of img tag property including single quote(')<br />
修复Bug：<br />
如果图片标签属性值包含单引号(')会出错

= 1.7.12.6 =
Bug Fixed:<br />
Download remote image failed on some servers. <br />
修复Bug：<br />
在某些服务器上下载远程图片失败。

= 1.7.12.5 =
New feature:<br />
Automatically change image title & alt as post title.<br />
新特性：<br />
自动参照文章标题添加图片标题和替代文本

= 1.7.12.4 =
New feature:<br />
Using 3 ways to download remote images.<br />
新特性：<br />
使用三种方法下载远程图片

= 1.7.12.3 =
New feature:<br />
Use curl instead of fopen to download remote images.<br />
新特性：<br />
使用cUrl代替fopen来下载远程图片

= 1.7.12.2 =
Bug fixed:<br />
Now the option 3 of change name feature would not generate URL encoded file name.<br />
修复Bug：<br />
现在更改文件名功能的第3项不会产生URL编码的的文件名了。

= 1.7.12.1 =
Bug fixed:<br />
Now the feature automatic-change-remote-images-filename-and-alt-as-post-name supporte IFTTT.<br />
修复Bug：<br />
现在自动更改文件名为文章名(Post Name | Slug)已支持IFTTT.

= 1.7.12 =
Mew format feature:<br />
Automatic change remote images filename and alt as post name. if you choose this, please make sure post name | slug exclude Chinese or other East Asian characters.<br />
格式化新功能：<br />
自动更改文件名为文章名(Post Name | Slug)，如果选择此项，请确保文章名(Post Name | Slug)不包含中文以及其他东亚字符。

= 1.7.11.4 =
Bug fixed:<br />
About image maximum size filter settings, support any size of one of width and height.<br />
修复Bug：<br />
在图片尺寸过滤设置中，支持高度和宽度其中之一为任意尺寸。

= 1.7.11.3 =
Bug fixed:<br />
Select category doesn't works on scan feature.<br />
修复Bug：<br />
扫描文章功能的选择分类不能正常工作。

= 1.7.11.2 =
Bug fixed:<br />
Can't format image url that has (*).<br />
修复Bug：<br />
不能格式化带*号的图片链接

= 1.7.11.1 =
Bug fixed:<br />
Ignore PHP warning messages has missing images when scanning posts.<br />
修复Bug：<br />
扫描文章时忽略远程图片不存在的警告信息。

= 1.7.11 =
New feature:<br />
Display addistional content after the each remote images.<br />
新特性：<br />
显示额外的内容到每一个自动保存的远程图片后面。

= 1.7.10.1 =
New feature:<br />
If PHP version lower than 5.4, automatic disabled the Maximum-Picture-Size feature.<br />
新特性：<br />
如果PHP版本低于5.4，自动禁用设置最大图像的功能。

= 1.7.10 =
New feature:<br />
Automatic reduction is greater than the size of the picture. default: 1280x1280(px)<br />
新特性：<br />
自动缩小大于所设置尺寸的图像。默认：1280x1280(像素)

= 1.7.9 =
New feature:<br />
Allowed to Ignore small size picture, such as some icons. default: 32x32(px)<br />
新特性：<br />
允许忽略小尺寸图像，比如一些小图标。默认：32x32(像素)

= 1.7.8 =
<ul>
	<li>New features:
		<ul>
			<li>Ignore animated GIF when doing watermark as preview option.</li>
			<li>Modified 'http://' to 'http(s)://' in Exclude-Domain/Keyword of General Options.</li>
		</ul>
	</li>
	<li>新特性:
		<ul>
			<li>添加水印时忽略GIF动画的预览选项</li>
			<li>将常规选项中的排除域名/关键词中的'http://'改为'http(s)://'</li>
		</ul>
	</li>
</ul>

= 1.7.7 =
New features:<br />
Allowed to keeps outside links of remote images.<br />
新特性：<br />
允许保留远程图片的外部链接。

= 1.7.6 =
Fixed a bug of regular expression that cleaned many contents in Visual-mode of Editor and in Manual-mode of plugin.<br />
修复正则表达式的bug，在可视化编辑情况下手动保存图片有时候会清空大量的内容。

= 1.7.5 =
New features:<br />
Added format options. The <img> code formated just like insert to post.<br />
新特性：<br />
增加格式化选项。格式化的<img>代码就像插入到文章的。

= 1.7.4 =
<ul>
	<li>Bugs fixed:
		<ol>
			<li>Manual mode of Scan-Post did saved remote images in process.</li>
			<li>Javascript parse error on select checkbox of pages of scan-posts in English website language.</li>
		</ol>
	</li>
	<li>New features:
		<ul>
			<li>Preview watermark.</li>
		</ul>
	</li>
	<li>修复Bugs：
		<ol>
			<li>扫描文章的手动模式会在扫描过程中偷偷保存远程图片。</li>
			<li>站点语言为英文时，选择扫描文章的页面文章类型会报Javascript语法错误。</li>
		</ol>
	</li>
	<li>新特性:
		<ul>
			<li>水印功能预览</li>
		</ul>
	</li>
</ul>

= 1.7.3 =
Bug fixed:<br />
The bug that Added a backslash "\" in front of apostrophes (') in text mode of editor and in manual mode of plugin.<br />
修复Bug：<br />
在插件的手动模式和编辑器的文本模式下，在(')之前加上"\"

= 1.7.2 =
New features:<br />
In manual mode, Supported auto save images from remote publishing.<br />
Bugs fixed:<br />
Some dynamic links had problem with change name.<br /><br />
新特性：<br />
支持在手动模式下允许通过远程发布保存图片。<br />
修复Bugs：<br />
采集一些动态链接出现Bug

= 1.7.1 =
<ul>
	<li>New features:
		<ol>
			<li>Auto change image filename, If it's possible to encounter remote images filename containing Chinese or other East Asian characters, i suggest enable it.</li>
			<li>Added Order/Order-by/Status filters for scan-posts mode.</li>
		</ol>
	</li>
	<li>新特性：
		<ol>
			<li>自动图片文件更名，如果你有可能碰到包含中文或其他东亚字符的远程图片文件名，建议开启。</li>
			<li>扫描文章模式增加 排序/排序依据/状态 筛选。</li>
		</ol>
	</li>
</ul>

= 1.7 =
<ul>
	<li>New features:
		<ol>
			<li>New interface.</li>
			<li>Added categories filter for scan-posts mode.</li>
		</ol>
	</li>
	<li>新特性：
		<ol>
			<li>新用户界面。</li>
			<li>扫描文章模式增加分类筛选。</li>
		</ol>
	</li>
</ul>

= 1.6.1 =
<ul>
	<li>New features:
		<ol>
			<li>Supported more type of dynamic link.</li>
			<li>More detail notifications for automatic/manual mode.</li>
		</ol>
	</li>
	<li>新特性：
		<ol>
			<li>支持更多类型的动态连接。</li>
			<li>自动/手动模式拥有更详细的通知信息</li>
		</ol>
	</li>
</ul>

= 1.6 =
New feature: Supported fetching images from some dynamic link.<br />
新特性：支持从部分动态连接抓取图片。

= 1.5.9.1 =
fixed a bug of regular expression.<br />
修复正则表达式的bug。

= 1.5.9 =
New feature: Set Exclude-Domain/Keyword.<br />
新特性：设置排除域名/关键词。

= 1.5.8 =
New feature: supported XMLRPC, means remote publishing from IFTTT.<br />
新特性：支持XMLRPC，意味着支持从IFTTT远程发布。

= 1.5.7.5 =
fixed a bug of regular expression.<br />
修复正则表达式的bug。

= 1.5.7.4 =
Hide posts do not have remote images from list in automatic mode.<br />
在自动扫描的列表中隐藏没有远程图像的文章。

= 1.5.7.3 =
Show post number in error notification<br />
在错误提示中显示文章的序号

= 1.5.7.2 =
The debug system can pass errors let process go to the end<br />
增加调试系统可以跳过错误让进程运行到底

= 1.5.7.1 =
New feature: Debug system added<br />
新特性：增加调试系统

= 1.5.7 =
<ul>
	<li>Fixed:
		<ol>
			<li>A bug of the stops process by some special characters.</li>
			<li>some english error messages.</li>
		</ol>
	</li>
	<li>修复:
		<ol>
			<li>一些特殊字符停止程序进程的bug。</li>
			<li>一些英文错误消息。</li>
		</ol>
	</li>
</ul>

= 1.5.6 =
<ul>
	<li>New features:
		<ol>
			<li>Set scope of ID for scan.</li>
			<li>List posts including remote images and handle them manually.</li>
		</ol>
	</li>
	<li>新功能：
		<ol>
			<li>设置文章ID的扫描范围。</li>
			<li>列出包含远程图像的文章，并且手动处理它们。</li>
		</ol>
	</li>
</ul>

= 1.5.5 =
Enhance the scanning speed of up to 10 times.<br />
可提升最多10倍扫描速度

= 1.5.4 =
Because of PHP runs for a limited time, so now using ajax to scan posts. but it runs slower than 1.5.3.<br />
因为PHP有运行时间限制，所以现在改为使用AJAX来扫描文章。但运行速度比1.5.3慢。

= 1.5.3 =
Added a filter set scan range for scanner<br />
添加过滤器来设置扫描仪的扫描范围

= 1.5.2 =
Make the plugin more proffesional<br />
让插件更专业

= 1.5.1 =
Make the plugin more secure<br />
让插件更安全

= 1.5 =
New feature: Scan posts and save remote images in all posts to local media library. Maybe take a long time.<br />
新功能：扫描所有的文章，将所有远程图片保存到本地，可能需要很长时间。

= 1.4.3 =
Now you can choose automatically set featured image or not.<br />
现在你可以选择是否自动设置特色图片。

= 1.4.2 =
Fixed 1 bug: If remote images are too big or too many, program need more time to download, When default time out, whole process stoped.<br />
If remote images are too many, sometimes you need fetch twice.<br />
修复bug：如果远程图片太大或太多，程序需要更多时间来下载，当默认的运行超时，程序会卡住。<br />
如果远程图片太多，有时候需要抓取两次。

= 1.4.1 =
New functional optimized<br />
优化了新功能

= 1.4 =
Add a new type allow user manually save remote images via click a button on the top of editor.<br />
You can change the Type in the plugin's setting page.<br />
添加一个新类型允许用户通过单击编辑器顶部的按钮手动保存远程图像。<br />
你可以在插件的设置页面更改类型。

= 1.3 =
<ul>
	<li>Fixed 2 bugs:
		<ol>
			<li>Failed to save remote image to local when the image url include "(\?(.*?))?", now it's works.</li>
			<li>If the remote image url is invalid, will not to save it to a blank attachment.</li>
		</ol>
	</li>
	<li>修复两个bug:
		<ol>
			<li>如果远程图片地址包含 "(\?(.*?))?" 会无法保存到本地，现在工作正常。</li>
			<li>如果远程图片地址无效，则不会保存一个空的附件到本地。</li>
		</ol>
	</li>
</ul>

= 1.2 =
add admin page to control use which action to save remote image.<br />
添加后台页面来管理选择使用下载远程图片的动作。

= 1.1 =
Remove auto rename.<br />
移除自动更名功能。<br />
if you want to upload images with chinese file name and server does not support chinese filename, please using 1.0.<br />
如果需要上传中文名图片，服务器又不支持中文文件名，请使用1.0

= 1.0 =
Born for Capture.<br />
The feature is can automatically change image filename.<br />
为采集而生<br />
特色是可以自动更改图片的文件名

== Upgrade Notice ==

= 1.7.10 =
This version used a new GD2 function, you need at least PHP 5.4 to run it.
该版本使用了一个新GD2函数，你至少需要PHP5.4来运行。

= 1.1 =
if you want to upload images with chinese file name and server does not support chinese filename, please using 1.0.<br />
如果需要上传中文名图片，服务器又不支持中文文件名，请使用1.0

= 1.0 =
The feature is can automatically change image filename.<br />
特色是可以自动更改图片的文件名

== Frequently Asked Questions ==

= Why the Maximum-Picture-Size fields are gray? =

Because PHP version is lower than 5.4. please upgrade your PHP.

= Why the Watermark featrue does not works? =

Because of it's only a preview. Full functionality is being developed in the Professional Edition. and i don't know what time Professional Edition released. who cares..

= 为什么“最大图像尺寸”设置输入框是灰色的？ =

因为PHP版本低于5.4，请升级PHP。

= 为什么水印功能不能用？ =

因为只是预览，完整的功能将在开发中的专业版中。我也不知道专业什么时候发布，管它呢……