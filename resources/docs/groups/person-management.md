# Person management

APIs for managing Person

## Display a listing of the person resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8082/api/people?sort=deserunt&fields[person]=autem&filters[first_name]=eligendi&filters[last_name]=sapiente&include=vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8082/api/people"
);

let params = {
    "sort": "deserunt",
    "fields[person]": "autem",
    "filters[first_name]": "eligendi",
    "filters[last_name]": "sapiente",
    "include": "vel",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8082/api/people',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'sort'=> 'deserunt',
            'fields[person]'=> 'autem',
            'filters[first_name]'=> 'eligendi',
            'filters[last_name]'=> 'sapiente',
            'include'=> 'vel',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (403):

```json
{
    "message": "This action is unauthorized.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException",
    "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
    "line": 224,
    "trace": [
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
            "line": 198,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/app\/Exceptions\/Handler.php",
            "line": 53,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/nunomaduro\/collision\/src\/Adapters\/Laravel\/ExceptionHandler.php",
            "line": 65,
            "function": "render",
            "class": "App\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 51,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 172,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/app\/Http\/Middleware\/ResponseCamelCaseMiddleware.php",
            "line": 20,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "App\\Http\\Middleware\\ResponseCamelCaseMiddleware",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/app\/Http\/Middleware\/RequestSnakeCaseMiddleware.php",
            "line": 26,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "App\\Http\\Middleware\\RequestSnakeCaseMiddleware",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 59,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 687,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 662,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 628,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 617,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 165,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 63,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 140,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 109,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 322,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 304,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 211,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 149,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 109,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 118,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 33,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 91,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 35,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 592,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 134,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Application.php",
            "line": 911,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Application.php",
            "line": 264,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Application.php",
            "line": 140,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/people`**

<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<code><b>sort</b></code>&nbsp;          <i>optional</i>    <br>
    Field to sort by. Defaults to 'id'.

<code><b>fields[person]</b></code>&nbsp;          <i>optional</i>    <br>
    Comma-separated fields to include in the response

<code><b>filters[first_name]</b></code>&nbsp;          <i>optional</i>    <br>
    Filter by first name.

<code><b>filters[last_name]</b></code>&nbsp;          <i>optional</i>    <br>
    Filter by last name.

<code><b>include</b></code>&nbsp;          <i>optional</i>    <br>
    Include related information, accepted values 'addresses','emailaddresses','phones','socialmediaaddresses','notes','tags'.



## Store a newly created person resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8082/api/people" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"preferred_name":"id","first_name":"optio","middle_name":"beatae","last_name":"iste","title":"sed","suffix":"placeat","professional_title":"omnis","preferred_language":"aliquid","date_of_birth":"ad","person_type_id":2}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8082/api/people"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "preferred_name": "id",
    "first_name": "optio",
    "middle_name": "beatae",
    "last_name": "iste",
    "title": "sed",
    "suffix": "placeat",
    "professional_title": "omnis",
    "preferred_language": "aliquid",
    "date_of_birth": "ad",
    "person_type_id": 2
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://127.0.0.1:8082/api/people',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'preferred_name' => 'id',
            'first_name' => 'optio',
            'middle_name' => 'beatae',
            'last_name' => 'iste',
            'title' => 'sed',
            'suffix' => 'placeat',
            'professional_title' => 'omnis',
            'preferred_language' => 'aliquid',
            'date_of_birth' => 'ad',
            'person_type_id' => 2,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (403):

```json
{
    "message": "This action is unauthorized.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException",
    "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
    "line": 224,
    "trace": [
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
            "line": 198,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/app\/Exceptions\/Handler.php",
            "line": 53,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/nunomaduro\/collision\/src\/Adapters\/Laravel\/ExceptionHandler.php",
            "line": 65,
            "function": "render",
            "class": "App\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 51,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 172,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/app\/Http\/Middleware\/ResponseCamelCaseMiddleware.php",
            "line": 20,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "App\\Http\\Middleware\\ResponseCamelCaseMiddleware",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/app\/Http\/Middleware\/RequestSnakeCaseMiddleware.php",
            "line": 26,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "App\\Http\\Middleware\\RequestSnakeCaseMiddleware",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 59,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 687,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 662,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 628,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 617,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 165,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 63,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 140,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 109,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 322,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 304,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 211,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 149,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 109,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 118,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 33,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 91,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 35,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 592,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 134,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Application.php",
            "line": 911,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Application.php",
            "line": 264,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Application.php",
            "line": 140,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### Request
<small class="badge badge-black">POST</small>
 **`api/people`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>preferred_name</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    

<code><b>first_name</b></code>&nbsp; <small>string</small>     <br>
    

<code><b>middle_name</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    

<code><b>last_name</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    

<code><b>title</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    

<code><b>suffix</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    

<code><b>professional_title</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    

<code><b>preferred_language</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    

<code><b>date_of_birth</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    

<code><b>person_type_id</b></code>&nbsp; <small>integer</small>         <i>optional</i>    <br>
    



## Display the specified person resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8082/api/people/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8082/api/people/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8082/api/people/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (500):

```json
{
    "message": "SQLSTATE[08006] [7] FATAL:  password authentication failed for user \"andromeda\" (SQL: select * from \"people\" where \"id\" = 1 and \"people\".\"deleted_at\" is null limit 1)",
    "exception": "Illuminate\\Database\\QueryException",
    "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
    "line": 671,
    "trace": [
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 631,
            "function": "runQueryCallback",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 339,
            "function": "run",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2203,
            "function": "select",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2191,
            "function": "runSelect",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2686,
            "function": "Illuminate\\Database\\Query\\{closure}",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2192,
            "function": "onceWithColumns",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 539,
            "function": "get",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 523,
            "function": "getModels",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Concerns\/BuildsQueries.php",
            "line": 143,
            "function": "get",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Model.php",
            "line": 1569,
            "function": "first",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ImplicitRouteBinding.php",
            "line": 46,
            "function": "resolveRouteBinding",
            "class": "Illuminate\\Database\\Eloquent\\Model",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 798,
            "function": "resolveForRoute",
            "class": "Illuminate\\Routing\\ImplicitRouteBinding",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 39,
            "function": "substituteImplicitBindings",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 59,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 687,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 662,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 628,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 617,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 165,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 63,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 140,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 109,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 322,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 304,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 211,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 149,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 109,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 118,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 33,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 91,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 35,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 592,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 134,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Application.php",
            "line": 911,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Application.php",
            "line": 264,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Application.php",
            "line": 140,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/people/{person}`**



## Update the specified person resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8082/api/people/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"preferred_name":"voluptatum","first_name":"cumque","middle_name":"saepe","last_name":"consequatur","title":"est","suffix":"nostrum","professional_title":"vel","preferred_language":"ad","date_of_birth":"ea","person_type_id":19}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8082/api/people/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "preferred_name": "voluptatum",
    "first_name": "cumque",
    "middle_name": "saepe",
    "last_name": "consequatur",
    "title": "est",
    "suffix": "nostrum",
    "professional_title": "vel",
    "preferred_language": "ad",
    "date_of_birth": "ea",
    "person_type_id": 19
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://127.0.0.1:8082/api/people/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'preferred_name' => 'voluptatum',
            'first_name' => 'cumque',
            'middle_name' => 'saepe',
            'last_name' => 'consequatur',
            'title' => 'est',
            'suffix' => 'nostrum',
            'professional_title' => 'vel',
            'preferred_language' => 'ad',
            'date_of_birth' => 'ea',
            'person_type_id' => 19,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (500):

```json
{
    "message": "SQLSTATE[08006] [7] FATAL:  password authentication failed for user \"andromeda\" (SQL: select * from \"people\" where \"id\" = 1 and \"people\".\"deleted_at\" is null limit 1)",
    "exception": "Illuminate\\Database\\QueryException",
    "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
    "line": 671,
    "trace": [
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 631,
            "function": "runQueryCallback",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 339,
            "function": "run",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2203,
            "function": "select",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2191,
            "function": "runSelect",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2686,
            "function": "Illuminate\\Database\\Query\\{closure}",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2192,
            "function": "onceWithColumns",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 539,
            "function": "get",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 523,
            "function": "getModels",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Concerns\/BuildsQueries.php",
            "line": 143,
            "function": "get",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Model.php",
            "line": 1569,
            "function": "first",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ImplicitRouteBinding.php",
            "line": 46,
            "function": "resolveRouteBinding",
            "class": "Illuminate\\Database\\Eloquent\\Model",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 798,
            "function": "resolveForRoute",
            "class": "Illuminate\\Routing\\ImplicitRouteBinding",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 39,
            "function": "substituteImplicitBindings",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 59,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 687,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 662,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 628,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 617,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 165,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 63,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 140,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 109,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 322,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 304,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 211,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 149,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 109,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 118,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 33,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 91,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 35,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 592,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 134,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Application.php",
            "line": 911,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Application.php",
            "line": 264,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Application.php",
            "line": 140,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### Request
<small class="badge badge-darkblue">PUT</small>
 **`api/people/{person}`**

<small class="badge badge-purple">PATCH</small>
 **`api/people/{person}`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>preferred_name</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    

<code><b>first_name</b></code>&nbsp; <small>string</small>     <br>
    

<code><b>middle_name</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    

<code><b>last_name</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    

<code><b>title</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    

<code><b>suffix</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    

<code><b>professional_title</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    

<code><b>preferred_language</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    

<code><b>date_of_birth</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    

<code><b>person_type_id</b></code>&nbsp; <small>integer</small>         <i>optional</i>    <br>
    



## Remove the specified person resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8082/api/people/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8082/api/people/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://127.0.0.1:8082/api/people/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (500):

```json
{
    "message": "SQLSTATE[08006] [7] FATAL:  password authentication failed for user \"andromeda\" (SQL: select * from \"people\" where \"id\" = 1 and \"people\".\"deleted_at\" is null limit 1)",
    "exception": "Illuminate\\Database\\QueryException",
    "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
    "line": 671,
    "trace": [
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 631,
            "function": "runQueryCallback",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 339,
            "function": "run",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2203,
            "function": "select",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2191,
            "function": "runSelect",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2686,
            "function": "Illuminate\\Database\\Query\\{closure}",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2192,
            "function": "onceWithColumns",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 539,
            "function": "get",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 523,
            "function": "getModels",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Concerns\/BuildsQueries.php",
            "line": 143,
            "function": "get",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Model.php",
            "line": 1569,
            "function": "first",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ImplicitRouteBinding.php",
            "line": 46,
            "function": "resolveRouteBinding",
            "class": "Illuminate\\Database\\Eloquent\\Model",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 798,
            "function": "resolveForRoute",
            "class": "Illuminate\\Routing\\ImplicitRouteBinding",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 39,
            "function": "substituteImplicitBindings",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 59,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 687,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 662,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 628,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 617,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 165,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 63,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 140,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 109,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 322,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 304,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 211,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 149,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 109,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 118,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 33,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 91,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 35,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 592,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 134,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Application.php",
            "line": 911,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Application.php",
            "line": 264,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/symfony\/console\/Application.php",
            "line": 140,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/seanshoffstall\/Code\/andromeda\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### Request
<small class="badge badge-red">DELETE</small>
 **`api/people/{person}`**




