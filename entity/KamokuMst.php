<?php
/**
 * Description of kamokuMst
 *
 * @author Sho
 */
class KamokuMst {
    
    private $kamoku_cd;
    private $kamoku_nm;

    public function getKamokuName($kamoku_cd) {
        return $this->kamoku_nm;
    }
    
    public function getKamokuCode($kamoku_nm) {
        return $this->kamoku_cd;
    }
    
}
