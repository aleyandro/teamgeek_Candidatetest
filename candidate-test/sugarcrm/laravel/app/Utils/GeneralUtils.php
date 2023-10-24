<?php namespace App\Utils;

use Illuminate\Support\Facades\DB;

class GeneralUtils {
    
    //Add functions here

    // static function to return the latest policy created. with some error handling,
    public static function getLatestPolicyName() {
        try {
            // Gets the latest policy created from the database from table called policies.
            $policy = DB::table('policies')
                ->orderBy('created_at', 'desc')
                ->first();
    
            // Checks if the policy was found.
            if ($policy) {
                // Returns the policy name.
                return $policy->name;
            } else {
                // Handle the case where no policy is found.
                return "No policy found";
            }
        } catch (\Exception $e) {
            // Handle any database query exceptions.
            \Log::error($e->getMessage());
            return "Error occurred while fetching policy";
        }
    }

    // Gets the number of cases that are of an increase cover type from the db
    public static function countIncreaseCoverCases(){
    try {
       
        $count = DB::table('cases')
            ->where('cover_type', 'increase')
            ->count();

        // Return the count.
        return $count;
    } catch (\Exception $e) {
        // Handle the exception.
        Log::error('Error occurred while counting increase cover cases: ' . $e->getMessage());
        
        
        return 0;
    }
}

//function to get the number of cases that are of a decrease cover type from the database
public static function countDecreaseCoverCases()
{
    
    $count = DB::table('cases')
        ->where('cover_type', 'decrease')
        ->count();

    // Return the count.
    return $count;
}
 // function to Get the number of cases that are of a cancel cover type from the database
public static function countCancelCoverCases()
{
    
    $count = DB::table('cases')
        ->where('cover_type', 'cancel')
        ->count();

    // Return the count.
    return $count;
}









    



}