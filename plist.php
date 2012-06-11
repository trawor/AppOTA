<?php
include_once('info.php');



$template="<?xml version=\"1.0\" encoding=\"UTF-8\"?><plist version=\"1.0\"><dict>
	<key>items</key>
	<array>
		<dict>
			<key>assets</key>
			<array>
				<dict>
					<key>kind</key>
					<string>software-package</string>
					<key>url</key>
					<string>{$ipaURL}</string>
				</dict>
				<dict>
					<key>kind</key>
					<string>display-image</string>
					<key>needs-shine</key>
					<integer>0</integer>
					<key>url</key>
					<string>{$imgURL}</string>
				</dict>
			</array>
			<key>metadata</key>
			<dict>
				<key>bundle-identifier</key>
				<string>{$appID}</string>
				<key>bundle-version</key>
				<string>{$version}</string>
				<key>kind</key>
				<string>software</string>
				<key>title</key>
				<string>{$name}</string>
			</dict>
		</dict>
	</array>
</dict></plist>
";
echo $template;	
?>