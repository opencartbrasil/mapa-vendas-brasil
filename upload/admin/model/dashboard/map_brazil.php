<?php
class ModelDashboardMapBrazil extends Model {
	public function getTotalOrdersByZone() {
		$query = $this->db->query("SELECT COUNT(*) AS total, SUM(o.total) AS amount, z.code FROM `" . DB_PREFIX . "order` o LEFT JOIN `" . DB_PREFIX . "zone` z ON (o.payment_zone_id = z.zone_id) WHERE o.order_status_id > '0' AND o.payment_country_id = '30' GROUP BY o.payment_zone_id");

		return $query->rows;
	}
}