Error: call to URL http://10.121.20.195:8503/test failed with status 500, response 
    <!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
    <html>
        <head>
            <title>Error: 500 Internal Server Error</title>
            <style type="text/css">
              html {background-color: #eee; font-family: sans;}
              body {background-color: #fff; border: 1px solid #ddd;
                    padding: 15px; margin: 15px;}
              pre {background-color: #eee; border: 1px solid #ddd; padding: 5px;}
            </style>
        </head>
        <body>
            <h1>Error: 500 Internal Server Error</h1>
            <p>Sorry, the requested URL <tt>&#039;http://10.121.20.195:8503/test&#039;</tt>
               caused an error:</p>
            <pre>Internal Server Error</pre>
              <h2>Exception:</h2>
              <pre>TypeError(u&quot;&#039;Database&#039; object is not callable. If you meant to call the &#039;disconnect&#039; method on a &#039;MongoClient&#039; object it is failing because no such method exists.&quot;,)</pre>
              <h2>Traceback:</h2>
              <pre>Traceback (most recent call last):
  File &quot;/usr/lib/python2.7/site-packages/bottle.py&quot;, line 862, in _handle
    return route.call(**args)
  File &quot;/usr/lib/python2.7/site-packages/bottle.py&quot;, line 1740, in wrapper
    rv = callback(*a, **ka)
  File &quot;/opt/jetlytics/ratemining/server.py&quot;, line 265, in test_save
    mongo.close()
  File &quot;/opt/jetlytics/ratemining/mongo.py&quot;, line 265, in close
    self.connection.disconnect()
  File &quot;/usr/lib64/python2.7/site-packages/pymongo/database.py&quot;, line 1348, in __call__
    self.__name, self.__client.__class__.__name__))
TypeError: &#039;Database&#039; object is not callable. If you meant to call the &#039;disconnect&#039; method on a &#039;MongoClient&#039; object it is failing because no such method exists.
</pre>
        </body>
    </html>
, curl_error , curl_errno 0