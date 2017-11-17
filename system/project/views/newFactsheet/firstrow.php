<div class="container-fluid firstrow" id="firstrow">
	<div class="row">		
			<div class="col-lg-6 col-md-6 col-sm-8 cols-xs-6 col-lg-offset-1 col-md-offset-1 slogan-header" id="slogan-header">
				<div class="col-lg-12 col-md-12 cold-sm-12 col-xs-12">
					<h1>Create a new</br>
					Factsheet.</h1>
					<hr>
					<p>Use the form below to provide us with the necessary information to create an informative factsheet where readers can quickly get an idea of a specific cryptocurrency and its specifications</p>		
				</div>
				<div class="col-lg-8 col-lg-offset-0 col-md-8 col-md-offset-0 cold-sm-12 col-xs-12"><button class="add-factsheet-button" id="add-factsheet-button">START ADDING</button>
				</div>			
			</div>			

		<div class="add-file-symbol" id="add-file-symbol" alt="add-file-image" style="color : white;">
			<img src="./img/add-file.png">
		</div>
	</div>

	<div class="row add-form hidden" id="add-form">
		<div class="col-lg-12 col-md-12 cold-sm-12 col-xs-12">

			<form class="" method="post">

			<div class="col-lg-12 col-md-12 cold-sm-12 col-xs-12">
				<div class="form-subtitle">Basics</div>
			</div>

			<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-name-coin input" id="input-name-coin">
				Name: <br><input type="text" name="name-coin" style="width: 80%;" class="form-control">
			</div>

			<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-abbreviation-coin input" id="input-abbreviation-coin">
				Abbreviation: <br><input type="text" name="abbreviation-coin" style="width: 30%;" class="form-control">
			</div>

			<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-website-coin input" id="input-website-coin">
				Website: <br><input type="text" name="website-coin" style="width: 80%;" class="form-control">
			</div>

			<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-twitter-coin input" id="input-twitter-coin">
				Twitter: <br> <input type="text" name="twitter-coin" style="width: 80%;" class="form-control">
			</div>

			<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-bitcointalk-coin input" id="input-bitcointalk-coin">
				BitcoinTalk announcement page: <br> <input type="text" name="bitcoinTalk-coin" style="width: 80%;" class="form-control">
			</div>

			<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-blog-coin input" id="input-blog-coin">
				Blog page: <br><input type="text" name="blog-coin" style="width: 80%;" class="form-control">
			</div>

			<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-reddit-coin input" id="input-reddit-coin">
				Reddit page: <br><input type="text" name="reddit-coin" style="width: 80%;" class="form-control">
			</div>

			<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-slack-coin input" id="input-slack-coin">
				Slack: <br><input type="text" name="slack-coin" style="width: 80%;" class="form-control">
			</div>

			<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-telegram-coin input" id="input-telegram-coin">
				Telegram: <br><input type="text" name="telegram-coin" style="width: 80%;" class="form-control">
			</div>

			<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 cols-xs-12 input-description-coin input" id="input-description-coin">					
			What is the purpose of this coin?<br>				
				<textarea rows="12" cols="100" maxlength="1500" minlength="250" placeholder="Describe yourself here..." name="description-coin" class="form-control">																
				</textarea>
			</div>

			<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 cols-xs-12 input-description-blockchain-coin input" id="input-description-blockhchain-coin">					
			How does this coin make use of the unique features that Blockchain offers?<br>				
				<textarea rows="12" cols="100" maxlength="1500" minlength="250" name="blockchain-coin" class="form-control">
						
				</textarea>
			</div>

			<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 cols-xs-12 input-value-blockchain-coin input" id="input-value-blockhchain-coin">					
			How does the token/cryptocurrency represent value?<br>				
				<textarea rows="12" cols="100" maxlength="1500" minlength="250" name="value-coin" class="form-control">
						
				</textarea>
			</div>

			<div class="col-lg-12 col-md-12 cold-sm-12 col-xs-12">
				<div class="form-subtitle">Mining</div>
			</div>

			<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-minable-coin input" id="input-minable-coin">
				Is this coin minable?<br>
				<label class="switch">				  
				  <input type="checkbox" name="minable-coin" id="minable-switch">
				  <span class="slider round"></span>
				</label>
  			</div>

  			<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-proof-of-work-coin input hidden" id="input-proof-of-work-coin">				
				(Partly) Proof of Work?<br>
				<label class="switch">				  
				  <input type="checkbox" name="work-coin" id="work-coin">
				  <span class="slider round"></span>
				</label>
  			</div>

  			<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-proof-of-stake-coin input hidden" id="input-proof-of-stake-coin">				
				(Partly) Proof of Stake?<br>
				<label class="switch">				  
				  <input type="checkbox" name="stake-coin" id="stake-coin">
				  <span class="slider round"></span>
				</label>
  			</div>

  			<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-dev-mining-coin input hidden" id="input-dev-mining-coin">				
				Do developers receive a % of mining revenue?<br>
				<label class="switch">				  
				  <input type="checkbox" name="share-coin" id="share-coin">
				  <span class="slider round"></span>
				</label>
  			</div>

  			<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-premine-coin input hidden" id="input-premine-coin">	
				Is there a premine?<br>
				<label class="switch">				  
				  <input type="checkbox" name="premine-coin" id="premine-coin">
				  <span class="slider round"></span>
				</label>
  			</div>

			<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-10 cols-xs-12 input-block-time-coin input hidden" id="input-block-time-coin">
				What is the Block Time? <br> 
				<input type="text" name="block-time-coin" placeholder="" class="form-control" style="width: 80%;"> minutes per block.
			</div>	

  			<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-10 cols-xs-12 input-block-reward-pow-coin input hidden" id="input-block-reward-pow-coin">
				What is the PoS block reward? <br> 
				<input type="text" name="pow-block-reward-coin" placeholder="" class="form-control" style="width: 80%;"> Tokens per block
			</div>	

			<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-10 cols-xs-12 input-block-reward-pos-coin input hidden" id="input-block-reward-pos-coin">
				What is the PoS block reward? <br> 
				<input type="text" name="pos-block-reward-coin" placeholder=" " class="form-control" style="width: 80%;"> Tokens per block
			</div>	

			<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-10 cols-xs-12 input-dev-revenue-coin input hidden" id="input-dev-revenue-coin">
				What % does dev receive of reward? <br> 
				<input type="text" name="dev-revenue-coin" class="form-control" style="width: 80%;"> %
			</div>	

			<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-10 cols-xs-12 input-total-premine-coin input hidden" id="input-total-premine-coin">
				How many tokens was the premine?<br> 
				<input type="text" name="total-premine-coin" class="form-control" style="width: 80%;"> Tokens
			</div>

			<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 cols-xs-12 mining-comments-coin input" id="mining-comments-coin">					
			Are there any special comments about mining?<br>				
				<textarea rows="12" cols="100" name="mining-comments" class="form-control">																
				</textarea>
			</div>



  			<div class="col-lg-12 col-md-12 cold-sm-12 col-xs-12">
  				<div class="form-subtitle">ICO Details</div>
  			</div>

  			<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-ICO-coin input" id="input-ICO-coin">		
				Was there an ICO?<br>
				<label class="switch">				  
				  <input type="checkbox" name="stake-coin" id="ico-switch">
				  <span class="slider round"></span>
				</label>
  			</div>

  			<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-ICO-dev-coin input" id="input-ICO-dev-coin">		
				Did the dev take a % of the tokens?<br>
				<label class="switch">				  
				  <input type="checkbox" name="ico-devshare-coin" id="ico-devshare">
				  <span class="slider round"></span>
				</label>
  			</div>

  			<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-10 cols-xs-12 input-ico-price-coin input hidden" id="input-ico-price-coin">
				<div class="col-lg-12 col-md-12 col-sm-12 cols-xs-12">What was the price of 1 token on the first day of the ICO (include the advantage of any bonuses)?</div>
				<div class="col-lg-8 col-md-8 col-sm-9 cols-xs-9"><input type="number" name="ico-price-coin" class="form-control" placeholder="price per token..."></div>
				<div class="col-lg-3 col-md-3 col-sm-2 cols-xs-2"><select class="form-control"><option>USD</option><option>ETH</option><option>BTC</option></select></div>
			</div>

  			<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-10 cols-xs-12 input-total-ico-tokens-coin input hidden" id="input-total-ico-tokens-coin">
				How many tokens were created? <br> 
				<input type="number" name="total-tokens-coin" class="form-control" style="width: 50%;" placeholder="amount of tokens..."> 
			</div>

			<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-10 cols-xs-12 input-percentage-share-ico-investors-tokens-coin input hidden" id="input-percentage-share-ico-investors-tokens-coin">
				How many tokens were distributed among ICO investors? <br> 
				<input type="number" name="total-investors-coin" class="form-control" style="width: 50%;" placeholder="amount of tokens..."> 
			</div>	

  			<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-10 cols-xs-12 input-percentage-share-ico-tokens-coin input hidden" id="input-percentage-share-ico-tokens-coin">
				How many % did Dev keep? <br> 
				<input type="number" name="total-devshare-coin" class="form-control" style="width: 50%;" placeholder="percentage of tokens...">
			</div>		


			<div class="col-lg-12 col-md-12 cold-sm-12 col-xs-12">
  				<div class="form-subtitle">Development team, advisors and partnerships</div>
  			</div>

  			<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-dev-coin input" id="input-dev-coin">		
				Are the developers op this coin anonymous?<br>
				<label class="switch">				  
				  <input type="checkbox" name="dev-coin" id="dev-switch">
				  <span class="slider round"></span>
				</label>
  			</div>

  			<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-advisors-coin input" id="input-advisors-coin">		
				Does this project have renowned advisors?<br>
				<label class="switch">				  
				  <input type="checkbox" name="advisors-coin" id="advisor-switch">
				  <span class="slider round"></span>
				</label>
  			</div>

  			<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 input-partnerships-coin input" id="input-partnerships-coin">		
				Does this project have meaningfull partnerships?<br>
				<label class="switch">				  
				  <input type="checkbox" name="partnerships-coin" id="partnerships-switch">
				  <span class="slider round"></span>
				</label>
  			</div>

  			<div class="col-lg-12 col-md-12 cold-sm-12 col-xs-12 div-team" id="div-team">
	  			<div class="col-lg-8 col-lg-offset-1 col-md-8 col-ms-offset-1 col-sm-12 col-xs-12 team-header">
		  			<h2>Development Team</h2>
		  			<p>Please provide us with more information about the development team behind this coin. You can add up to 5 team members, so only include the most important ones.</p>
	  			</div>

	  			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-lg-offset-1 cold-sm-12 col-xs-12 div-team team-member" id="team-member-one">
		  			<div class="col-lg-11 col-lg-offset-1 col-md-11 col-ms-offset-1 col-sm-12 col-xs-12 team">
		  				<h3>Team Member number 1</h3>
		  			</div>

		  			<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-one input" id="first-name-dev-one">
						First Name: <br><input type="text" name="first-name-dev-one" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-one input" id="first-name-dev-one">
						Last Name: <br><input type="text" name="last-name-dev-one" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-one input" id="first-name-dev-one">
						Role: <br><input type="text" name="role-dev-one" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-one input" id="first-name-dev-one">
						LinkedIn: <br><input type="text" name="linkedin-dev-one" style="width: 80%;">
					</div>

					<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 cols-xs-12 dev-one-comments-coin input" id="dev-one-comments-coin">					
						Can you describe relevant previous experience of this team member?<br>				
						<textarea rows="12" cols="100" name="dev-one-comments"></textarea>
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 add-new-team-member-button" id="add-new-team-member-button-two">
						<button class="add-button-team-member" id="add-button-team-member-two" type="button">Add another team member</button>
					</div>

				</div>				

				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-lg-offset-1 cold-sm-12 col-xs-12 team-member" id="team-member-two" style="display: none;">
					<div class="col-lg-11 col-lg-offset-1 col-md-11 col-ms-offset-1 col-sm-12 col-xs-12 team">
		  				<h3>Team Member number 2</h3>
		  			</div>

		  			<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-two input" id="first-name-dev-two">
						First Name: <br><input type="text" name="first-name-dev-two" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-two input" id="first-name-dev-two">
						Last Name: <br><input type="text" name="last-name-dev-two" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-two input" id="first-name-dev-two">
						Role: <br><input type="text" name="role-dev-two" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-two input" id="first-name-dev-two">
						LinkedIn: <br><input type="text" name="linkedin-dev-two" style="width: 80%;">
					</div>

					<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 cols-xs-12 dev-two-comments-coin input" id="dev-two-comments-coin">					
						Can you describe relevant previous experience of this team member?<br>				
					<textarea rows="12" cols="100" name="dev-two-comments">	</textarea>
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 add-new-team-member-button" id="add-new-team-member-button-three">
						<button class="add-button-team-member" id="add-button-team-member-three" type="button">Add another team member</button>
					</div>

					<div class="col-lg-3 col-md-5 col-sm-6 cols-xs-12 delete-new-team-member-button" id="delete-new-team-member-button-two">
						<button class="delete-button-team-member" id="delete-button-team-member-two" type="button">Delete this team member</button>
					</div>
				</div>

				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-lg-offset-1 cold-sm-12 col-xs-12 div-team team-member" id="team-member-three" style="display: none;">
					<div class="col-lg-11 col-lg-offset-1 col-md-11 col-ms-offset-1 col-sm-12 col-xs-12 team">
		  				<h3>Team Member number 3</h3>
		  			</div>

		  			<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-three input" id="first-name-dev-three">
						First Name: <br><input type="text" name="first-name-dev-one" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-three input" id="first-name-dev-three">
						Last Name: <br><input type="text" name="last-name-dev-three" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-three input" id="first-name-dev-three">
						Role: <br><input type="text" name="role-dev-three" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-three input" id="first-name-dev-thre">
						LinkedIn: <br><input type="text" name="linkedin-dev-three" style="width: 80%;">
					</div>

					<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 cols-xs-12 dev-three-comments-coin input" id="dev-three-comments-coin">					
						Can you describe relevant previous experience of this team member?<br>				
					<textarea rows="12" cols="100" name="dev-three-comments">																
					</textarea>
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 add-new-team-member-button" id="add-new-team-member-button-four">
						<button class="add-button-team-member" id="add-button-team-member-four" type="button">Add another team member</button>
					</div>

					<div class="col-lg-3 col-md-5 col-sm-6 cols-xs-12 delete-new-team-member-button" id="delete-new-team-member-button-three">
						<button class="delete-button-team-member" id="delete-button-team-member-three" type="button">Delete this team member</button>
					</div>
				</div>


				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-lg-offset-1 cold-sm-12 col-xs-12 div-team team-member" id="team-member-four" style="display: none;">
					<div class="col-lg-11 col-lg-offset-1 col-md-11 col-ms-offset-1 col-sm-12 col-xs-12 team">
		  				<h3>Team Member number 4</h3>
		  			</div>

		  			<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-four input" id="first-name-dev-four">
						First Name: <br><input type="text" name="first-name-dev-four" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-four input" id="first-name-dev-four">
						Last Name: <br><input type="text" name="last-name-dev-four" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-four input" id="first-name-dev-four">
						Role: <br><input type="text" name="role-dev-four" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-four input" id="first-name-dev-four">
						LinkedIn: <br><input type="text" name="linkedin-dev-four" style="width: 80%;">
					</div>

					<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 cols-xs-12 dev-four-comments-coin input" id="dev-four-comments-coin">					
						Can you describe relevant previous experience of this team member?<br>				
					<textarea rows="12" cols="100" name="dev-four-comments">																
					</textarea>
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 add-new-team-member-button" id="add-new-team-member-button-five">
						<button class="add-button-team-member" id="add-button-team-member-five" type="button">Add another team member</button>
					</div>

					<div class="col-lg-3 col-md-5 col-sm-6 cols-xs-12 delete-new-team-member-button" id="delete-new-team-member-button-four">
						<button class="delete-button-team-member" id="delete-button-team-member-four" type="button">Delete this team member</button>
					</div>
				</div>

				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-lg-offset-1 cold-sm-12 col-xs-12 div-team team-member" id="team-member-five" style="display: none;">
					<div class="col-lg-11 col-lg-offset-1 col-md-11 col-ms-offset-1 col-sm-12 col-xs-12 team">
		  				<h3>Team Member number 5</h3>
		  			</div>

		  			<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-five input" id="first-name-dev-five">
						First Name: <br><input type="text" name="first-name-dev-five" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-five input" id="first-name-dev-five">
						Last Name: <br><input type="text" name="last-name-dev-five" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-five input" id="first-name-dev-five">
						Role: <br><input type="text" name="role-dev-five" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-dev-five input" id="first-name-dev-five">
						LinkedIn: <br><input type="text" name="linkedin-dev-five" style="width: 80%;">
					</div>

					<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 cols-xs-12 dev-five-comments-coin input" id="dev-five-comments-coin">					
						Can you describe relevant previous experience of this team member?<br>				
					<textarea rows="12" cols="100" name="dev-five-comments">																
					</textarea>
					</div>

					<div class="col-lg-3 col-md-5 col-sm-6 cols-xs-12 delete-new-team-member-button" id="delete-new-team-member-button-five">
						<button class="delete-button-team-member" id="delete-button-team-member-five" type="button">Delete this team member</button>
					</div>

				</div>

			</div>

			<div class="col-lg-12 col-md-12 cold-sm-12 col-xs-12 div-advisors hidden" id="div-advisors">
				<div class="col-lg-8 col-lg-offset-1 col-md-8 col-ms-offset-1 col-sm-12 col-xs-12 advisory-team-header">
					<h2>Advisors</h2>
		  			<p>Please provide us with more information about the advisors behind this coin. You can add up to 3 advisors, so only include the most important ones.</p>
  				</div>

	  			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-lg-offset-1 cold-sm-12 col-xs-12 advisory-team advisory-team-member" id="advisory-team-member-one">
		  			<div class="col-lg-11 col-lg-offset-1 col-md-11 col-ms-offset-1 col-sm-12 col-xs-12 advisors">
		  				<h3>Advisor number 1</h3>
		  			</div>

		  			<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-advisor-one input" id="first-name-advisor-one">
						First Name: <br><input type="text" name="first-name-advisor-one" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-advisor-one input" id="first-name-advisor-one">
						Last Name: <br><input type="text" name="last-name-advisor-one" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-advisor-one input" id="first-name-advisor-one">
						LinkedIn: <br><input type="text" name="linkedin-advisor-one" style="width: 80%;">
					</div>

					<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 cols-xs-12 advisor-one-comments-coin input" id="advisor-one-comments-coin">					
						Can you give background information about this advisor? Why is he usefull?<br>				
					<textarea rows="12" cols="100" name="advisor-one-comments">																
					</textarea>
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 add-new-advisory-team-member-button" id="add-new-advisory-team-member-button-two">
						<button class="add-button-advisory-team-member" id="add-button-advisory-team-member-two" type="button">Add another advisor</button>
					</div>
					
				</div>

				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-lg-offset-1 cold-sm-12 col-xs-12 advisory-team advisory-team-member" id="advisory-team-member-one">
					<div class="col-lg-11 col-lg-offset-1 col-md-11 col-ms-offset-1 col-sm-12 col-xs-12 advisors">
		  				<h3>Advisor number 2</h3>
		  			</div>

		  			<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-advisor-two input" id="first-name-advisor-two">
						First Name: <br><input type="text" name="first-name-advisor-two" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-advisor-two input" id="first-name-advisor-two">
						Last Name: <br><input type="text" name="last-name-advisor-two" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-advisor-two input" id="first-name-advisor-two">
						LinkedIn: <br><input type="text" name="linkedin-advisor-two" style="width: 80%;">
					</div>

					<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 cols-xs-12 advisor-two-comments-coin input" id="advisor-two-comments-coin">					
						Can you give background information about this advisor? Why is he usefull?<br>				
					<textarea rows="12" cols="100" name="advisor-two-comments">																
					</textarea>
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 add-new-advisory-team-member-button" id="add-new-advisory-team-member-button-three">
						<button class="add-button-advisory-team-member" id="add-button-advisory-team-member-three" type="button">Add another advisor</button>
					</div>

					<div class="col-lg-3 col-md-5 col-sm-6 cols-xs-12 delete-new-advsory-team-member-button" id="delete-new-advisory-team-member-button-two">
						<button class="delete-button-advisory-team-member" id="delete-button-advisory-team-member-two" type="button">Delete this advisor</button>
					</div>

				</div>

				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-lg-offset-1 cold-sm-12 col-xs-12 advisory-team advisory-team-member" id="advisory-team-member-one">
					<div class="col-lg-11 col-lg-offset-1 col-md-11 col-ms-offset-1 col-sm-12 col-xs-12 advisors">
		  				<h3>Advisor number 3</h3>
		  			</div>

		  			<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-advisor-three input" id="first-name-advisor-three">
						First Name: <br><input type="text" name="first-name-advisor-three" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-advisor-three input" id="first-name-advisor-three">
						Last Name: <br><input type="text" name="last-name-advisor-three" style="width: 80%;">
					</div>

					<div class="col-lg-3 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 cols-xs-12 first-name-advisor-three input" id="first-name-advisor-three">
						LinkedIn: <br><input type="text" name="linkedin-advisor-three" style="width: 80%;">
					</div>

					<div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 cols-xs-12 advisor-three-comments-coin input" id="advisor-three-comments-coin">					
						Can you give background information about this advisor? Why is he usefull?<br>				
					<textarea rows="12" cols="100" name="advisor-three-comments">																
					</textarea>
					</div>

					<div class="col-lg-3 col-md-5 col-sm-6 cols-xs-12 delete-new-advsory-team-member-button" id="delete-new-advisory-team-member-button-three">
						<button class="delete-button-advisory-team-member" id="delete-button-advisory-team-member-three" type="button">Delete this advisor</button>
					</div>
				</div>

			</div>			
  			
			</form>

		</div>		
	</div>
</div>

<style type="text/css">
	
#firstrow {
	background-color: #052453;
	width: 100%;
}

#slogan-header {
	color: white;
	margin-top: 10%;
	margin-bottom: 30%;	
}

#add-file-symbol {
	position: absolute;
	right: 0px;
	bottom: -10%;
	text-shadow: 	
}

#add-file-symbol img{
	width: 300px;
    height: 300px;	
}

@media only screen and (max-width: 768px) {
    #add-file-symbol img {
        visibility: hidden;
    }
}

.add-factsheet-button {
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  background: #052453;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  border: solid 3px #c6a700;
  margin-top: 10%;
  width: 100%;  
}

.add-factsheet-button:hover {
  background: #c6a700;  
  text-decoration: none;
}

.add-form {
	background-color: white;
	border-top: 2em solid #052453; 
}

.input {
	margin-top: 5%;
}


/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  margin-top: 1em;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

.form-subtitle {
	background-color: #c6a700;
	color: white;
	font-size: 1.5em;
	padding: 0.2em;
	font-weight: bolder;
	margin-top: 2em;
	margin-bottom: 1em;
}

.hidden {
	visibility: hidden;	
}

.unhide {
	visibility: visible;	
}

.team {
	margin-top: 5%;
}

#add-form {
	padding-bottom: 5%;
}

.team-member {
	background-color: #fffded;
	padding: 2%;	
	margin-bottom: 3em; 
	margin-top: 3em;
}

.advisory-team-member{
	background-color: #fffded;
	padding: 2%;	
	margin-bottom: 3em; 
	margin-top: 3em;
}

.add-button-team-member {
  background: #052453;
  background-image: -webkit-linear-gradient(top, #052453, #17335c);
  background-image: -moz-linear-gradient(top, #052453, #17335c);
  background-image: -ms-linear-gradient(top, #052453, #17335c);
  background-image: -o-linear-gradient(top, #052453, #17335c);
  background-image: linear-gradient(to bottom, #052453, #17335c);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 10px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  margin-top: 2em;
}

.add-button-team-member:hover {
  background: #355685;
  background-image: -webkit-linear-gradient(top, #355685, #355685);
  background-image: -moz-linear-gradient(top, #355685, #355685);
  background-image: -ms-linear-gradient(top, #355685, #355685);
  background-image: -o-linear-gradient(top, #355685, #355685);
  background-image: linear-gradient(to bottom, #355685, #355685);
  text-decoration: none;
}

.delete-button-team-member {
	background: #8c0000;
  background-image: -webkit-linear-gradient(top, #8c0000, #8c0000);
  background-image: -moz-linear-gradient(top, #8c0000, #8c0000);
  background-image: -ms-linear-gradient(top, #8c0000, #8c0000);
  background-image: -o-linear-gradient(top, #8c0000, #8c0000);
  background-image: linear-gradient(to bottom, #8c0000, #8c0000);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 10px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  margin-top: 2em;
}

.delete-button-team-member:hover {
	background: #a80303;
  background-image: -webkit-linear-gradient(top, #a80303, #a80303);
  background-image: -moz-linear-gradient(top, #a80303, #a80303);
  background-image: -ms-linear-gradient(top, #a80303, #a80303);
  background-image: -o-linear-gradient(top, #a80303, #a80303);
  background-image: linear-gradient(to bottom, #a80303, #a80303);
  text-decoration: none;
}

.add-button-advisory-team-member {
  background: #052453;
  background-image: -webkit-linear-gradient(top, #052453, #17335c);
  background-image: -moz-linear-gradient(top, #052453, #17335c);
  background-image: -ms-linear-gradient(top, #052453, #17335c);
  background-image: -o-linear-gradient(top, #052453, #17335c);
  background-image: linear-gradient(to bottom, #052453, #17335c);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 10px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  margin-top: 2em;
}

.add-button-advisory-team-member:hover {
  background: #355685;
  background-image: -webkit-linear-gradient(top, #355685, #355685);
  background-image: -moz-linear-gradient(top, #355685, #355685);
  background-image: -ms-linear-gradient(top, #355685, #355685);
  background-image: -o-linear-gradient(top, #355685, #355685);
  background-image: linear-gradient(to bottom, #355685, #355685);
  text-decoration: none;
}

.delete-button-advisory-team-member {
	background: #8c0000;
  background-image: -webkit-linear-gradient(top, #8c0000, #8c0000);
  background-image: -moz-linear-gradient(top, #8c0000, #8c0000);
  background-image: -ms-linear-gradient(top, #8c0000, #8c0000);
  background-image: -o-linear-gradient(top, #8c0000, #8c0000);
  background-image: linear-gradient(to bottom, #8c0000, #8c0000);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 10px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  margin-top: 2em;
}

.delete-button-advisory-team-member:hover {
	background: #a80303;
  background-image: -webkit-linear-gradient(top, #a80303, #a80303);
  background-image: -moz-linear-gradient(top, #a80303, #a80303);
  background-image: -ms-linear-gradient(top, #a80303, #a80303);
  background-image: -o-linear-gradient(top, #a80303, #a80303);
  background-image: linear-gradient(to bottom, #a80303, #a80303);
  text-decoration: none;
}

</style>

<script type="text/javascript" src="js/form.js"></script>
