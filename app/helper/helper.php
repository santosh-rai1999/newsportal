<?php
function uploadFile($request,$object,$fileName)
{
    if($request->hasFile($fileName))
    {
        $file = $request->file($fileName);
        $newName=uniqid(). "." . $file->getClientOriginalExtension();
        $file->move("images",$newName);
        $object->$fileName ="images/$newName";
    }
}
