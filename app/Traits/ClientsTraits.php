
namespace App\Traits; 



Trait ClientsTraits
{
    protected function saveFile($file,$folder){
        // save photo in folder
        $file_extension=$file->getClientoriginalExtension();
    
        $file_name=time().'.'.$file_extension;
        $path=$folder;
        $file->move($path,$file_name);
        return$file_name;
    }


}