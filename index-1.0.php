<html>
<head>
	<title>
		Warning Site - Anti-Memo Page
	</title>
	<style type="text/css">
		/*.header{
			font-family: Arial;
			font-weight: bold; 
			position:absolute;
			top:0;
			left:0;
			width:100%;
			height:50px;
			background-color: #333;
		}*/
		.body{
			position:absolute;
			/*top:50px;*/
			left:0;
			width:100%;
			/* Firefox */
			height: -moz-calc(100% - 50px);
			/* WebKit */
			height: -webkit-calc(100% - 50px);
			/* Opera */
			height: -o-calc(100% - 50px);
			/* Standard */
			height: calc(100% - 50px);
			/*height: 100%;*/
		}
		.left_1{
			position:absolute;
			top:0;
			left:0;
			width:40%;
			height:50%;
		}
		.left_2{
			position:absolute;
			top:50%;
			left:0;
			width:40%;
			height:50%;
		}
		.right_1{
			position:absolute;
			top:0;
			left:40%;
			width:60%;
			height:100%;
		}	
		/*ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		    background-color: #333;
		}

		li {
		    float: left;
		}

		li a {
		    display: block;
		    color: white;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		}

		li a:hover {
		    background-color: #FF8C1C;
		}*/
		#floatbar {
		    position:relative;
		}

		.popup {
		    position:absolute;
		    top:10px;
		    left:0px;
		    height:30px;
		    background:#EEE;
		    display:none;
		}
	</style>
	<style type="text/css">
		#jsalarmclock{
		font-family: Tahoma;
		font-weight: bold;
		font-size: 12px;
		}

		#jsalarmclock div{
		margin-bottom: 0.8em;
		}

		#jsalarmclock div.leftcolumn{
		float: left;
		width: 150px;
		font-size: 13px;
		clear: left;
		}

		#jsalarmclock span{
		margin-right: 5px;
		}


		/* Style The Dropdown Button */
		.dropbtn {
		    background-color: #4CAF50;
		    color: white;
		    padding: 10px;
		    font-size: 16px;
		    border: none;
		    cursor: pointer;
		}
		/* The container <div> - needed to position the dropdown content */
		.dropdown {
		    position: relative;
		    display: inline-block;
		}

		/* Dropdown Content (Hidden by Default) */
		.dropdown-content {
		    display: none;
		    position: absolute;
		    background-color: #EBEEB6;
		    min-width: 160px;
		    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		    z-index: 1;
		}

		/* Links inside the dropdown */
		.dropdown-content a {
		    color: black;
		    padding: 6px 10px;
		    text-decoration: none;
		    display: block;
		    font-family: sans-serif;
		}

		/* Change color of dropdown links on hover */
		.dropdown-content a:hover {background-color: #848080}

		/* Show the dropdown menu on hover */
		.dropdown:hover .dropdown-content {
		    display: block;
		}

		/* Change the background color of the dropdown button when the dropdown content is shown */
		.dropdown:hover .dropbtn {
		    background-color: #3e8e41;
		}

		.table_code > .table_code_inner {
			margin-top: 5px;
			margin-left: 50px;
			margin-right: 50px;
			border: 5px solid green;
			padding: 5px; 
		}

		.table_code_title {
			/*text-indent: 100px;*/
			font-family: monospace;
			font-weight: 800;
		}
		a.img-wallet {
			background: url('img/wallet-xxl.png') 15px 13px/20px 20px no-repeat;
			height: 20px;
			width: 20px;
		}
		a.img-wallet:hover {
			background: url('img/wallet-xxl-orange.png') 15px 13px/20px 20px no-repeat;
		}
		a.img-one-note {
			background: url('img/one-note-icon.png') 15px 10px/28px 28px no-repeat;
			height: 20px;
			width: 20px;
		}
		a.img-one-note:hover {
			background: url('img/one-note-icon-orange.png') 15px 10px/28px 28px no-repeat;
			height: 20px;
			width: 20px;
		}
		.learning_row {
			margin-top:5px;
			padding-top: 5px;
			border-top: 1px solid #303030;
		}
		.dropbtn_learn{
			background-color:#DD9814;
			color: white;
		    padding: 10px;
		    font-size: 16px;
		    border: none;
		    cursor: pointer;
		}
		.dropdown:hover .dropbtn_learn {
		    background-color: #B98012;
		}
		</style>

		<script type="text/javascript">

		/***********************************************

		* JavaScript Alarm Clock- by JavaScript Kit (www.javascriptkit.com)
		* This notice must stay intact for usage
		* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and 100s more

		***********************************************/

		var jsalarm={
			padfield:function(f){
				return (f<10)? "0"+f : f
			},
			showcurrenttime:function(){
				var dateobj=new Date()
				var ct=this.padfield(dateobj.getHours())+":"+this.padfield(dateobj.getMinutes())+":"+this.padfield(dateobj.getSeconds())
				this.ctref.innerHTML=ct
				this.ctref.setAttribute("title", ct)
				if (typeof this.hourwake!="undefined"){ //if alarm is set
					if (this.ctref.title==(this.hourwake+":"+this.minutewake+":"+this.secondwake)){
						clearInterval(jsalarm.timer)
						// window.location=document.getElementById("musicloc").value
						var win = window.open('http://localhost/homepage', '_blank');
  						win.focus();
					}
				}
			},
			init:function(){
				var dateobj=new Date()
				this.ctref=document.getElementById("jsalarm_ct")
				this.submitref=document.getElementById("submitbutton")
				this.submitref.onclick=function(){
					jsalarm.setalarm()
					this.value="Alarm Set"
					this.disabled=true
					return false
				}
				this.resetref=document.getElementById("resetbutton")
				this.resetref.onclick=function(){
				jsalarm.submitref.disabled=false
				jsalarm.hourwake=undefined
				jsalarm.hourselect.disabled=false
				jsalarm.minuteselect.disabled=false
				jsalarm.secondselect.disabled=false
				return false
				}
				var selections=document.getElementsByTagName("select")
				this.hourselect=selections[0]
				this.minuteselect=selections[1]
				this.secondselect=selections[2]
				for (var i=0; i<60; i++){
					if (i<24) //If still within range of hours field: 0-23
					this.hourselect[i]=new Option(this.padfield(i), this.padfield(i), false, dateobj.getHours()==i)
					this.minuteselect[i]=new Option(this.padfield(i), this.padfield(i), false, dateobj.getMinutes()==i)
					this.secondselect[i]=new Option(this.padfield(i), this.padfield(i), false, dateobj.getSeconds()==i)

				}
				jsalarm.showcurrenttime()
				jsalarm.timer=setInterval(function(){jsalarm.showcurrenttime()}, 1000)
			},
			setalarm:function(){
				this.hourwake=this.hourselect.options[this.hourselect.selectedIndex].value
				this.minutewake=this.minuteselect.options[this.minuteselect.selectedIndex].value
				this.secondwake=this.secondselect.options[this.secondselect.selectedIndex].value
				this.hourselect.disabled=true
				this.minuteselect.disabled=true
				this.secondselect.disabled=true
			}
		}

		</script>

	</header>
	<body>
		<div class="body">
			<div class="dropdown">
				<button class="dropbtn">Mantis</button>
				<div class="dropdown-content">
					<a href="http://mantis-asj.alliance.com.ph/mantisbt/login_page.php?return=%2Fmantisbt%2Fmy_view_page.php&error=1&username=gdaroy&secure_session=1&perm_login=0" target="_blank">Alliance</a>
					<a href="http://182.158.73.57:8800/mantis/login_page.php?return=%2Fmantis%2Fview.php%3Fid%3D484" target="_blank">Client</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Marge</button>
				<div class="dropdown-content">
					<a href="https://sls-marge.asji.jp/crm/index.php?action=Login&module=Users&login_module=MatchingTypeFunds&login_action=index" target="_blank">crm</a>
					<a href="https://sls-marge.asji.jp/" target="_blank">sls</a>
					<a href="https://sl-marge.asji.jp/" target="_blank">sl</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Marge 2</button>
				<div class="dropdown-content">
					<a href="http://sls-marge2.asji.jp:8110/crm/index.php?action=Login&module=Users&login_module=Home&login_action=index">CRM</a>
				</div>
			</div>
			<div class="dropdown">
				<a href="http://alfresco-asj.alliance.com.ph:8080/alfresco/faces/jsp/login.jsp" target="_blank">
					<button class="dropbtn" style="text-decoration:none;color:white">
						Alfresco
					</button>
				</a>
			</div>
			<div class="dropdown">
				<button class="dropbtn">AP</button>
				<div class="dropdown-content">
					<a href="http://182.158.73.57:8820/index.php?action=Login&module=Users&login_module=Home&login_action=index" target="_blank">AP2</a>
					<a href="http://182.158.73.57:8840/index.php?action=Login&module=Users&login_module=Loans&login_action=index" target="_blank">VM_AP2</a>
				</div>
			</div>
			<div class="dropdown">
				<a href="https://translate.google.com/" target="_blank">
					<button class="dropbtn" style="text-decoration:none;color:white;">
						G+ Translate
					</button>
				</a>
			</div>
			<div class="dropdown">
				<a href="http://portal.alliance.com.ph/portal/" target="_blank">
					<button class="dropbtn" style="text-decoration:none;color:white;background:#31734A">
						PORTAL
					</button>
				</a>
			</div>
			<div class="dropdown">
				<a href="http://asidtr.alliance.com.ph/ASI_DTR/index.php/login" target="_blank">
					<button class="dropbtn" style="text-decoration:none;color:white;background:#31734A">
						DTR
					</button>
				</a>
			</div>
			<div class="learning_row">
				<div class="dropdown">
					<a href="learn_angular.php" target="_blank">
						<button class="dropbtn_learn" style="text-decoration:none;color:white;">
							Angular JS
						</button>
					</a>
				</div>
			</div>


			<center>
<!-- 				<br><br>
				<img src="https://vectr.com/ajcajegas/a15tNvnX2i.svg?width=640&height=640&select=dNmjV5mtV" /> -->
				<br><br>
				<h1><b>WARNING</b></h1>
				<div class="warning-txt"><b>SAY NO TO NON-WORK RELATED SITES!</b></div>
				<br>
				<br>
				<br>
				<?php /**
				Alarm 1:
				date_default_timezone_set('EST');
				if(date("l") == "Sunday"){
					if(date("g") >= "5" && date("g") <= "7"){
						echo "<img src=http://example.com/images/radio_banner.jpg>";
					}
				}
				*/?>
				<?php /**
					Alarm 2:
				*/ ?>
				<div style="width:800px;text-align:left">
					<form action="" method="">
						<div id="jsalarmclock">
							<div>
								<div class="leftcolumn">Current Time:</div>
								<span id="jsalarm_ct" style="letter-spacing: 2px"></span>
							</div>
							<div>
								<div class="leftcolumn">Set Alarm:</div>
								<span><select></select> Hour</span>
								<span><select></select> Minutes</span>
								<span><select></select> Seconds</span>
							</div>
							<div>
								<div class="leftcolumn">Set Alarm Action:</div>
								<input type="text" id="musicloc" size="55" value="http://localhost/homepage" />
								<span style="font: normal 11px Tahoma">*Location of page to launch</span>
							</div>
							<input type="submit" value="Set Alarm!" id="submitbutton" /> <input type="reset" value="reset" id="resetbutton" />
						</div>
					</form>

					<script type="text/javascript">
						jsalarm.init()
					</script>
				</div>
				<div>
					<?php
						$dir = 'C:\wamp\www';
						$directory = scandir($dir);
						$limit = ceil(count($directory)/2);
						echo "<table><tr valign='top'><td>";
							for($d = 1;$d<=$limit;$d++) {
								if(!empty($directory[$d])){
									echo "$d &rArr; <a href ='http:\\".$directory[$d]."' target='_blank'>".$directory[$d]."</a><br>";
								}
							}
						echo "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>";
							for($d = 1;$d<=$limit;$d++) {
								if(!empty($directory[$limit+$d])){
									echo ($limit+$d)." &rArr; <a href ='http:\\".$directory[$limit+$d]."' target='_blank'>".$directory[$limit+$d]."</a><br>";
								}
							}
						echo "</td></tr></table>";
							// echo "<br>$d &rArr; <a href ='http:\\".$directory[$d]."' target='_blank'>".$directory[$d]."</a>";
					?>
				</div>
			</center>
<div class="table_code">
	<div class="table_code_inner">
		<div class="table_code_title">Basic Guide On Cryptocurrency</div>
	<p>Cryptocurrency has been taking internet by storm. For the past few months it had made headlines in different news frontpage. Cryptocurrencies are a fascinating new technology and has disrupted the financial transactions world. Cryptocurrencies represent a shift on how we think about money.</p>

	<p>This starter’s guide will give you a good understanding of what cryptocurrency is all about.</p>

	<h4>What Is A Cryptocurrency?</h4>

	<p>Cryptocurrencies are distributed digital currencies or a digital cash which allow for seamless, direct, and extremely fast transactions between parties. Unlike fiat money you have full control over your payments and balance. You can spend and earn with ease online. Another thing that makes it different from fiat money is its transparency.</p>

	<p>All validations in your transactions are done by the cryptocurrency network. Cryptocurrencies are deccentransalized and managed transactions in a distributed fashion. Another best feature of using cryptocurrency is that it can process transactions in a matter of seconds or minutes, and not hours or days as it may take to send money today.</p>

	<p>Cryptocurrencies, often referred to as coins, are stored in digital ‘wallets’ that you use to manage your payments. Your wallet is protected by a private key – think of it like an extremely complex password – that only you know about. You can spend or send money by submitting a transaction from your wallet to someone else’s.</p>
	<!--

	Like cash, you can spend the money however you want – whether lending to a friend, paying for lunch, or even paying an employee. Unlike cash though, as cryptocurrencies are digital you can pay with a wallet app on your phone, with a special keychain, and in other ways that make cryptocurrency easier to use.
	How Do Cryptocurrencies Work?

	Cryptocurrencies were developed as an application on top a cryptographic invention known as blockchain, hence the name cryptocurrency. Blockchain is a technology that will support multiple technologies – cryptocurrency is just one of them. But importantly cryptocurrencies, as we have them today, would not be possible without the blockchain technology. So, what is blockchain?
	Blockchain

	A block is a complex mathematical problem based on a cryptographic technology (called a “hash”) which computers aim to solve. Once the mathematical problem is solved, the block is ‘complete’. The important property of a block is that if you change any information inside of it – like transaction data – becomes invalid, or broken. The only way to fix it is to replace the incorrect data with the correct, original, data.

	When a new block is created, it takes data from the previous block, creating a link – hence the term blockchain. In a blockchain, if any data in any block is altered, the entire blockchain from that point onwards is broken. You can think of it like a tower of wooden blocks, if you break one block in the middle of the tower, all the blocks above it topple over. The only way to ‘fix’ the tower is by correcting the data that was tampered with. In fact, blockchains are often measured in terms of ‘height’ which is the total number of blocks in the tower. So, the older the data is, the more secure it becomes. Generally, a block will be considered ‘valid’ once enough additional blocks are added to the chain in order to ensure security. In cryptocurrencies, the blockchain is used to store an immutable transaction ledger for the currency.
	Mining

	People called miners solve these mathematical problems. They are responsible for bundling together transactions and then solving the mathematical puzzle. Mining can be very computationally difficult and thus requires powerful computers to solve these puzzles. The computers cost money and importantly require electricity to run. In order to incentivize people to mine, they are given a prize for their work – either in new coins, transaction fees, both, or otherwise.

	Part of a miner’s job is also to ensure that transactions are valid. They do this by ensuring that the person attempting to send coins has enough to send – they can examine the existing blockchain to determine a wallet’s balance. Because the blockchain is available for anyone to view, every transaction made by every wallet is visible to all. While this may seem like a privacy concern as someone can track your balance and spending, you can actually have as many wallets as you want, and there are technologies and specific cryptocurrencies that exist to provide complete anonymity while still maintaining the integrity of the blockchain.
	Distributed Ledger, and Confirmation

	Anyone who wants can have a copy of the blockchain, so when a miner successfully solves a new block, they announce it to the network to get acceptance of the new block, or consensus. Other miners first verify the transactions – this is a security measure to ensure that a rogue miner doesn’t try to facilitate invalid transactions – and then add new blocks to the latest blockchain. As additional blocks are added to the chain, older transactions are considered confirmed. The more confirmations that a block has, the more it is trusted. As the network verifies the transaction ledger, it is called a distributed ledger. This is opposed to a central ledger that a bank might maintain. Unlike a bank’s central ledger though, the distributed ledger can’t be hacked, broken, or counterfeited.

	    Did You Know? May 22nd is known as Bitcoin Pizza Day! A programmer paid a Bitcoin user 10,000 bitcoins for two Papa John’s pizzas on this day in 2010. Check the current price →

	Is it Secure?

	As with any time you’re dealing with money, security is one of the ultimate concerns. Cryptocurrencies have numerous security measures designed into the technology to ensure that individuals and the entire network are secure.

	On a personal level, each wallet is secured by a private key to which only the owner has access. Your wallet also has an address that is used to place transactions from wallet to another. In order to place a transaction, you must digitally sign it with your private key to prove that the owner is authorizing the transaction. This means that even if someone else were to find out your wallet’s address, they would not be able to make any transactions. However, if you were to give someone your private key, or if they somehow found it out from you, they would be able to authorize any transactions on your behalf. This is why it is of the utmost importance to keep your private key private!

	As mentioned already, the underlying technology of blockchain makes it impossible to edit transactions after they have occurred. Additionally, because of the way transactions are reviewed, cryptocurrencies also aren’t susceptible to the “double spending” problem where a person tries to pay two different parties with the same money. The increased safety of the network over conventional methods makes cryptocurrencies safer, and thus also cheaper. If you look at the transaction cost of most conventional ways to pay (for example 3% fees for merchants on credit cards), the fees are meant to cover problems like fraud, chargebacks, and more that is spread across all users. If you take away these costs, you can provide ultra-low-cost transactions, sometimes just pennies in fees for thousands of dollar transactions.

	    Did You Know? The FBI supposedly owns 15 percent of the world’s Bitcoins after raiding a black market.

	Top Cryptocurrencies
	Bitcoin

	Bitcoin (BTC) is the original cryptocurrency, it is the market leader due to its established reputation worldwide, its security and the huge community base powering it. It holds significant value and has received media attention around the world. Retailers such as Overstock.com accept payments and Bitcoin, and Amazon allows consumers to purchase gift cards with the cryptocurrency. Currently, Bitcoin is the most valuable cryptocurrency and is valued at $96 billion, or about 57% of the market.
	Ethereum

	While Bitcoin was designed as a digital currency cash system, Ethereum (ETH) is designed to help companies deploy applications on the distributed blockchain. The underlying currency, called Ether, acts as the fuel that powers these applications. Ethereum is often referred to as a ‘Swiss Army knife’ and supports numerous use cases which can range from ticket sales, escrow agents, online gaming betting, and more. Currently, Etherum is valued at $28 billion.
	Ripple

	Ripple (XRP) is a digital asset targeted to allow financial institutions to make global payments more easily and more cheaply. To meet the demand of these institutions, their technology also focuses on transaction throughput and already can handle about 200 times more transactions per second than Bitcoin can. They already boast a strong list of customers which includes RBC, UBS, Santander, CIBC, and more than a dozen other banks, exchanges, and payment providers. Ripple is currently valued at $7.8 billion.
	Litecoin

	Litecoin (LTC) was released in 2012 as a ‘lite’ version of Bitcoin, built using much of the original Bitcoin code base. Its primary advantages are that it supports much faster payments and far more transaction throughput than Bitcoin, capable of handling global payments in less than one second. Litecoin is sometimes referred to as the ‘test bed’ for Bitcoin because it is known to adopt and implement technological advancements much quicker and more smoothly than Bitcoin. It is currently worth $2.9 billion.

	    Did You Know? A journalist was once given a Bitcoin live on TV back in 2013. It was quickly stolen from him by a viewer. Lesson learned: do never expose your private key.

	Where To Start

	Now that you have a bit of a better understanding of what’s cryptocurrency all about, you may want to learn more about some of the specific currencies or get started by buying some.

	If you want to go into depth on the technical specifics, we recommend reading more about the various cryptocurrencies on Cryptominded’s Coin Wiki. Additionally, read some of the whitepapers, for example those of Bitcoin and Ethereum. We also love to share with you the ‘Learn More‘ collection.

	Do you get excited about cryptocurrency and do you want to buy some? Coinbase is a good starters exchange to acquire some Bitcoin or Ethereum, however if Coinbase is not available in your country, check Cryptominded’s WheretoBuy tool.

	At the moment, we’re working very hard to write more guides. For example on storing, buying, mining & trading, besides continuously improving this starters guide. Want to get an update when we release a new guide? Then subscribe to our newsletter  (which by the way has a lot of other cool content as well, such as exclusive community interviews).

	We hope you got a little bit more excited about cryptocurrencies and have gotten a better understanding from this Starter’s Guide! If you’ve any feedback for the guide, let us know!
	Only for a limited time & with limited availability:
	Book a 30min free consultation call with the founder of Cryptominded to get your questions about cryptocurrencies answered →
	Bonus!: The Origins Of Cryptocurrency

	Satoshi Nakamoto is fictional name provided as the inventor of the first ever cryptocurrency, Bitcoin. Some believe that Satoshi Nakamoto is, in fact, a pseudonym for a group of people. The community believes that Nakamoto started working on the project in 2007.

	In 2008 the Bitcoin domain was registered on a site that allows the anonymous registration of domain names. Bitcoin.org was up and running a year after Satoshi started working on the concept.

	Nakamoto then quickly moved to publish a piece that explained in full what Bitcoin was, how it worked and how double spending would be prevented. The first mining took place in January 2009 after the project was registered on SourceForge.net – a website focused on open source software. A few days later the first ever transaction using cryptocurrency took place.

	Bitcoin was actually intended to be a peer-to-peer electronic cash system and not a currency. Many had tried and ultimately failed in their attempts to design digital money previously. He wanted to create a digital payment system that was decentralized in the same way files are shared over a peer-to-peer network.

	The public bitcoin transaction log shows that Nakamoto’s known addresses contain roughly one million bitcoins, or over $2 billion. To this day the identity or identities of Satoshi Nakamoto is or are not known, but there is no doubt that Satoshi Nakamoto has already left an incredible legacy on the financial industry.
	-->
	</div>
</div>
<div class="table_code">
	<div class="table_code_inner">
		<div class="table_code_title">IF ELSE STATEMENTS</div>
<pre>
	/* another basic usage */
	$message = 'Hello '.($user->is_logged_in() ? $user->get('first_name') : 'Guest');

	/* shorthand usage */
	$message = 'Hello '.($user->get('first_name') ?: 'Guest');

	/* echo, inline */
	echo 'Based on your score, you are a ',($score > 10 ? 'genius' : 'nobody'); //harsh!

	/* a bit tougher */
	$score = 10;
	$age = 20;
	echo 'Taking into account your age and score, you are: ',($age > 10 ? ($score < 80 ? 'behind' : 'above average') : ($score < 50 ? 'behind' : 'above average')); // returns 'You are behind'

	* "thankfully-you-don't-need-to-maintain-this" level */
	 $days = ($month == 2 ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year %400 ? 28 : 29))) : (($month - 1) % 7 % 2 ? 30 : 31)); //returns days in the given month
</pre>
	</div>
</div>
<div class="table_code">
	<div class="table_code_inner">
		<div class="table_code_title">This is a sample code for incrementing fund_no</div>
<pre>
	&lt;?php
	$fn = 'KH001';	
		for($i=1;$i<=100;$i++){
			$fund_number = str_pad((substr($fn, -4)) + $i, 4,'0', STR_PAD_LEFT);
			$new_fn = "KH" . $fund_number;
			echo '&ltbr&gt'.$new_fn;
		}
	?&gt
</pre>
	</div>
</div>
<div class="table_code">
	<div class="table_code_inner">
		<div class="table_code_title">This is a sample code for getting cancel investment status</div>
<pre>
&lt;?php 
	// $var = "Investment Transferred from:  88c7eea9-534e-9164-50e3-588b62513d89,
	 1e93c2a5-88d9-caca-5cc3-588b629db5e3, 65a588c7-5129-a39d-4094-588b62c207af,
	 9a7a4cb3-23d1-771f-4c5c-588b62e4ef32, 98872e77-fc2d-a98c-a8b7-588c8970d1b1,";
	$var = "Investment Transferred from:  88c7eea9-534e-9164-50e3-588b62513d89,";
	if( strpos($var, 'Investment Transferred from') !== FALSE){
        $get_inv_id = explode("from:  ", $var);
        $get_last_inv_id = explode(',', $get_inv_id[1]);
        var_dump($get_last_inv_id);
        var_dump(count($get_last_inv_id));
        if(count($get_last_inv_id) > 2){
            $ctrl = count($get_last_inv_id) - 2;
            $next_id = substr($get_last_inv_id[$ctrl], 1);
            var_dump($next_id);
        } else {
            $next_id = substr($get_inv_id[1], 0, -1);
            var_dump($next_id);
        }
    }
?&gt;
</pre>
	</div>
</div>
<div class="table_code">
	<div class="table_code_inner">
		<div class="table_code_title">Keep Moving and Explore: Beginner's Guide to Hiking</div>
		<p>When I was not yet into hiking, I would easily say "no" to my friends who would invite me into backpacking and camping events. Things like "i will just waste my time..", "hiking is tiring..", "traveling will cost me a lot..", would easily cross my mind. But when i tried it for the first time, I know by then that I will gladly do it again.</p>
		<p>When you think about hiking, I know these thoughts would also come into mind. But if you are into adventure and would like to open possibilities of going outdoors, I hope this guide would help you.</p>
		<p>This list is based on my experience and I know, with this guide you will be prepared when you try your first hike.</p>
		<p>What to do to start hiking:</p>
		<ol>
			<li>Decide the distance of the hike<br/>
				<p>As a beginer, you don't need to hike a long distance.</p>
			</li>
		</ol>
	</div>
</div>
<div class="table_code">
	<div class="table_code_inner">
		<div class="table_code_title">How to Earn Money/Bitcoins By Playing Mobile Games</div>
		<p>For the past few months, cryptocurrency have been taking the world by storm. If you are up to date with Crytocurrency news 2017 ended with a bullish market. Right now, it is going down, but that is how volatile cryptocurrencies are. On cryptocurrency that leads the pact is Bitcoin. It has been around for a long time and started the cryptocurrency revolution.</p>
	</div>
</div>

		<script src="jquery-3.1.1.min.js"></script>
		<script type="text/javascript">
			$("#floatbar").click(function(e){
			    e.preventDefault();
			    $(".popup").fadeIn("fast");
			});
			$("#close").click(function(e){
			    e.preventDefault();
			    $(".popup").fadeOut("fast");
			});
		</script>
	</body>
</html>