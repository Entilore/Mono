<?php 
$cart0=true;
include("header_navbar.php");       ?>

<div class="sigma-parent">
  <div class="sigma-expand" id="sigma-canvas"></div>
</div>
<div id="mainpanel">
  <div class="col">
    <div id="maintitle"></div>
    <div id="title"></div>
    <div id="titletext"></div>
    <div id="legend">
     <div class="box">
      <h2>Legend:</h2>
      <dl>
        <dt class="node">
        </dt>
        <dd></dd>
        <dt class="edge"></dt>
        <dd></dd>
        <dt class="colours"></dt>
        <dd></dd>		
      </dl>
    </div>
  </div> 
  <div class="b1">
    <form>
      <div id="search" class="cf"><h2>Search:</h2>
        <input type="text" name="search" value="Search by name" class="empty"/><div class="state"></div>
        <div class="results"></div>
      </div>
      <div class="cf" id="attributeselect"><h2>Group Selector:</h2>
        <div class="select">Select Group</div>
        <div class="list cf"></div>
      </div>
    </form>
  </div>
</div>
<div id="information">
</div>
</div>
<div id="zoom">
  <div class="z" rel="in"></div> <div class="z" rel="out"></div> <div class="z" rel="center"></div>
</div>
<div id="copyright">
  <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="assets/carto/CC.png" /></a></div>
</div>
<div id="attributepane">
  <div class="text">
   <div title="Close" class="left-close returntext"><div class="c cf"><span>Return to the full network</span></div></div>	
   <div class="headertext">
     <span>Information Pane</span>
   </div>	
   <div class="nodeattributes">
    <div class="name"></div>
    <div class="data"></div>
    <div class="p">Connections:</div>
    <div class="link">
      <ul>
      </ul>
    </div>
  </div>
</div>
</div>
<div id="developercontainer">
	<a href="http://www.oii.ox.ac.uk" title="Oxford Internet Institute"><div id="oii"><span>OII</span></div></a>
	<a href="http://jisc.ac.uk" title="JISC"><div id="jisc"><span>JISC</span></div></a>	
</div>
<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-21293169-4']);
_gaq.push(['_setDomainName', 'none']);
_gaq.push(['_setAllowLinker', true]);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>

<?php
include("footer.php");       ?>