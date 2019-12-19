<?php
	
class Test extends Public_Controller
{

    // ------------------------------------------------------------------------------

    /**
     * here's the task 'tests/test/task'
     */
    public function task()
    {
	    
        $data = $this->input->post();     // as you see, params worked like normally post data
		
        log_message('info', var_export($data, true));
    }

    // ------------------------------------------------------------------------------

    /**
     * here's the timer method
     *
     * you should copay timers.php to your config folder,
     * then add $timers['tests/test/task_timer'] = 10000; and start the swoole server.
     *
     * this method would be called every 10 seconds per time.
     */
    public function task_timer()
    {
        log_message('info', 'timer works!');
    }

    // ------------------------------------------------------------------------------

    /**
     * send data to task
     */
    public function send()
    {
	   
        try
        {
            \CiSwoole\Core\Client::send(
            [
                'route'  => '/test/task',
                'params' => ['hope' => 'it works!'],
            ]);
            
        }
        catch (\Exception $e)
        {
	        
            log_message('error', $e->getMessage());
            log_message('error', $e->getTraceAsString());
        }
    }

    // ------------------------------------------------------------------------------

}