<?php
class ModelDashboardMapBrazil extends Model {
    public function getTotalOrdersByZone() {
        if (version_compare(VERSION, '2.2') < 0) {
            $query = $this->db->query("SELECT COUNT(*) AS total, SUM(o.total) AS amount, z.code as code FROM `" . DB_PREFIX . "order` o LEFT JOIN `" . DB_PREFIX . "zone` z ON (o.payment_zone_id = z.zone_id) WHERE o.order_status_id > '0' AND o.payment_country_id = '30' GROUP BY o.payment_zone_id");
        } else {
            $query = $this->db->query("SELECT COUNT(*) AS total, SUM(o.total) AS amount, c.iso_code_2 as code FROM `" . DB_PREFIX . "order` o LEFT JOIN `" . DB_PREFIX . "country` c ON (o.payment_country_id = c.country_id) WHERE o.order_status_id > '0' AND o.payment_country_id = '30' GROUP BY o.payment_country_id");
        }

        return $query->rows;
    }
}