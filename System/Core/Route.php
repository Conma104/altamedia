<?php
namespace System\Core;

use Exception;

class Route
{
    protected $query = null;
    protected $controller = 'MainController';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        // lấy thông tin query GET
       $this->handelQuery();

       $fullController=  $this->handelController();
      if (!is_null($fullController)) {
        $fullControllerArray = explode('@', $fullController);
        if (count($fullControllerArray) !=2) {
            throw new Exception('Format Controller Error', 500);
        }

        $this->controller = $fullControllerArray[0];
        $this->method = $fullControllerArray[1];
      }   
    }

    protected function handelQuery() {
        if(isset($_GET['qQuery']) && !empty($_GET['qQuery'])) {
          return $this->query = trim($_GET['qQuery'], '/'); 
           
        }
        return null;
    }


    protected function handelController()
    {
        if (is_null($this->query)) {
            return null;
        }

        global $_Route;

    //   kiểm tra query có nằm trong mamngr $_Route hay không , 
    // nếu có trả về tên Controller
        if(isset($_Route[$this->query]) && !empty($_Route[$this->query])) {
            return $_Route[$this->query];
        }

        // dd($this->query);
        // dem so cap trong url 
        $countQuery = count(explode('/', $this->query));
    

        foreach($_Route as $key=> $value) {
            $countKey = count(explode('/', $key));

            if($countQuery == $countKey) {
            //    chuyeern name về dạng regex
                 $pregexString = preg_replace('/{(.*?)}/', '([a-zA-Z0-9\-]+)',$key);
                // cập nhật regex
                $pregexString = "/" .str_replace("/", "\/", $pregexString) . "/i";

                // dd($pregexString);
                // so sanhs chuỗi regex với query
                if(preg_match($pregexString,$this->query, $matchs)) {
                    // dd($matchs);
                    
                    // laays thaam so tu route
                    preg_match_all('/{(.*?)}/i', $key, $pregexQuery);

                //  dd($pregexQuery);
                    // xóa bớt nội dung
                    
                    unset($matchs[0]);
                    // dd(array_values($matchs));

                    $this->params = array_combine($pregexQuery[1], array_values($matchs));
                    return $value;

                }
                
            }
        }
        return null;
    }
}


?>