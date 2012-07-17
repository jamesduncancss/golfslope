<?php $this->load->view('templates/header'); ?>

<style>

.pagehead {
	background: #fff;
	padding: 10px;
	margin-bottom: 2px;
	float: left;
	width: 980px;
	}

ul.pagehead-actions {
margin: 0;
float: right;
position: absolute;
right: 0;
z-index: 21;
}

.pagehead.userpage h1 {
margin-bottom: 0;
font-size: 30px;
height: auto;
line-height: 54px;
font-weight: bold;
}

.pagehead h1 {
margin: 0 0 10px 0;
letter-spacing: -1px;
/* color: #495961; */
z-index: 0;
}

.rule, hr {
clear: both;
float: left;
margin: 10px 0;
height: 0;
overflow: hidden;
border: none;
background: transparent;
border-bottom: 1px solid #DDD;
width: 1000px;
}

.pagehead img {
	width: 90px;
	height: 90px;
	border: 1px solid #E6E6E6;
	padding: 2px;
	}


.columns.profilecols .first {
float: left;
width: 450px;
}

.vcard dl {
margin: 5px 0 0 0;
font-size: 12px;
}

.vcard dl dt {
margin: 0;
float: left;
width: 115px;
color: #999;
}


.columns.profilecols .last {
float: right;
width: 350px;
}

.profilecols ul.stats {
	margin: 3px 0 0 0;
	}

.profilecols ul.stats li {
list-style-type: none;
float: left;
margin-left: 30px;
min-width: 60px;
}

.profilecols ul.stats li strong {
display: block;
font-size: 36px;
font-weight: bold;
color: black;
}

.profilecols ul.stats li span {
display: block;
margin-top: -10px;
font-size: 11px;
color: #999;
}



</style>

<div id="container">
	<div id="content">
		<div id="wrapper">
		
		<!-- profile styles start -->
		<div class="pagehead userpage">
  
           
  <h1 class="avatared">
      <a href=""><img src="https://secure.gravatar.com/avatar/ae341f7eb365518d32b1b6bec287fa8b?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-140.png" width="48" /></a>
    <span itemprop="additionalName" class="username">Jack Nicklaus</span>
    (<span itemprop="name">Dean Sofer</span>)
  </h1>

</div><!-- /.pagehead -->
  <div class="rule"></div>

  <div class="columns profilecols" data-name="ProLoser">
    <div class="first vcard">
        <dl>
    <dt>Linked in Profile</dt>
    <dd itemprop="url"><a href="http://www.deansofer.com" class="url" rel="nofollow me">http://www.deansofer.com</a></dd>
  </dl>
  <dl>
    <dt>Home Course</dt>
    <dd itemprop="worksFor">Augusta National Golfclub</dd>
  </dl>
  <dl>
    <dt>Location</dt>
    <dd itemprop="homeLocation">San Francisco</dd>
  </dl>
  <dl>
    <dt>Handicap</dt>
    <dd itemprop="homeLocation">6</dd>
  </dl>
<dl>
  <dt>Member Since</dt>
  <dd>Mar 26, 2009</dd>
</dl>

    </div><!-- /.first -->
    <div class="last">
      <ul class="stats">
        <li>
          <a href="/ProLoser/followers">
            <strong>113</strong>
            <span>courses played</span>
          </a>
        </li>
        <li>
          <a href="/ProLoser/following">
            <strong>191</strong>
            <span>courses want to play</span>
          </a>
        </li>
        <li>
          <a href="/ProLoser/following">
            <strong>30</strong>
            <span>golfslope friends</span>
          </a>
        </li>
      </ul>
	<!--
        <div class="following">
          <h3>Organizations</h3>
          <ul class="avatars">
              <li>
                <a href="/Jobvite" itemprop="follows" title="Jobvite"><img height="36" src="https://secure.gravatar.com/avatar/d41d8cd98f00b204e9800998ecf8427e?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-orgs.png" width="36" /></a>
              </li>
              <li>
                <a href="/angular-ui" itemprop="follows" title="angular-ui"><img height="36" src="https://secure.gravatar.com/avatar/7644dc16702896486463e095a918d7b6?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-orgs.png" width="36" /></a>
              </li>
          </ul>
        </div> -->
    </div><!-- /.last -->
  </div><!-- /.columns.profilecols -->
	
	<br clear="all" />
	
	
  <div class="rule"></div>


		
	<h1>Users</h1>
	<p>Below is a list of the users.</p>
	
	<div id="infoMessage"><?php echo $message;?></div>
	
	<style>
		table tr td {
			padding: 0 10px 2px 0;
			}
	</style>
	
	<table cellpadding=0 cellspacing=10>
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Email</td>
			<td>Groups</td>
			<td>Status</td>
			<td>Handicap</td>
			<td>Home Course</td>
		</tr>
		<?php foreach ($users as $user):?>
			<tr>
				<td><?php echo $user->first_name;?></td>
				<td><?php echo $user->last_name;?></td>
				<td><?php echo $user->email;?></td>
				<td>
					<?php foreach ($user->groups as $group):?>
						<?php echo $group->name;?><br />
	                <?php endforeach?>
				</td>
				<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, 'Active') : anchor("auth/activate/". $user->id, 'Inactive');?></td>
				<td><?php echo $user->handicap;?></td>
				<td><?php echo $user->homecourse;?></td>
			</tr>
		<?php endforeach;?>
	</table>
	
	<p><a href="<?php echo site_url('auth/create_user');?>">Create a new user</a></p>
	
</div>

</div>
	</div>
</div>

<?php $this->load->view('templates/footer'); ?>
