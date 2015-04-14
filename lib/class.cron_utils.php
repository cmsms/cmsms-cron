<?php
#----------------------------------------------------------------------
# This file is part of CMS Made Simple module: Cron
# Copyright (C) 2010-2015 Jean-Christophe Cuvelier <jcc@atomseeds.com>
# Refer to licence and other details at the top of file Cron.module.php
# More info at http://dev.cmsmadesimple.org/projects/cron
#----------------------------------------------------------------------

final class cron_utils
{
	public static function getPeriods()
	{
		return array(
		 '15min' => '-15 minutes',
		 'Hourly' => '-1 hour',
		 'Daily' => '-1 day', 
		 'Weekly' => '-1 week', 
		 'Monthly' => '-1 month', 
		 'Yearly' => '-1 year'
		);
	}
}

?>