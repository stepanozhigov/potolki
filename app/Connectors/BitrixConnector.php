<?

namespace App\Connectors;
use Illuminate\Support\Facades\Log;

class BitrixConnector { 

    protected $url = 'https://bitrix-ts.ru:443/crm/configs/import/lead.php';
    protected $login = 'k.kabakov';
    protected $password = '11Q09w93E.';
    protected $requestData = '';

    public function __construct ($data = null)
    {
        $this->requestData = $data;
    }

    protected function openConnection ($url, $arFields)
    {
        $curl = \curl_init($url);

        $queryFields = [
            'LOGIN' =>  $this->login,
            'PASSWORD'  =>  $this->password
        ];

        \curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER  =>  true,
            CURLOPT_POST => 1, 
            CURLOPT_POSTFIELDS => http_build_query($queryFields + $arFields)
        ]);

        return $curl;
    }

    public function addLead ($data)
    {
        $connection = $this->openConnection('https://bitrix-ts.ru:443/crm/configs/import/lead.php', [
            'TITLE' =>  $data['title'],
            'NAME'  =>  $data['name'],
            'SOURCE_ID' =>  $data['source'] ?? '',
            'PHONE_MOBILE' =>  $data['phone'] ?? '',
            'COMMENTS'   =>  $data['comment'] ?? "",
            'UF_CRM_1478533058' => $data['city'] ?? '',
            'ASSIGNED_BY_ID'    =>  551,
            'UF_CRM_1467050632' =>  $data['direction'] ?? ''
        ]);

        $result = \curl_exec($connection);
        Log::info([$data, $result, $connection]);
        //var_dump($result, $this->requestData);

        return true;
    }
    
    public function addTask ()
    {

    }
}