$booking = date('Y/m/d H:i:s', $booking_date);
		$today=date('Y/m/d H:i:s');
		$datetime1 = new DateTime($booking);
		$datetime2 = new DateTime($today);
		$interval = $datetime2->diff($datetime1);

        echo $interval->format('%h')." hr ".$interval->format('%i')." min " .$interval->format('%s')." sec";
