var currentTab;
			var tabs;
			var tab_section;
			var lastTab;
			window.onload = function() {
				
				
				tabs = document.getElementsByClassName("tab");
				tab_section = document.getElementsByClassName("tab-section");
				currentTab = tab_section[0];
				lastTab = tabs[0];
				
				for( var i = 0; i < tabs.length; i++ ){
					tabs[i].onclick = (function(abc) { return function() { changeTab(abc); }})(i);
					
				}
				
			
			}
			
			function changeTab(abc) {
				if (abc >= 0){
					lastTab.className = "tab";
					currentTab.style.display = "none";

					
					tab_section[abc].style.display = "block";
					tabs[abc].className = "tab active";
					
					currentTab = tab_section[abc];
					lastTab = tabs[abc];
				}
			}


// Google analytics
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64352953-1', 'auto');
  ga('send', 'pageview');

