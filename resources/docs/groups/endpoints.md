# Endpoints


## Return an empty response simply to trigger the storage of the CSRF cookie in the browser.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/sanctum/csrf-cookie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/sanctum/csrf-cookie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETsanctum-csrf-cookie" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsanctum-csrf-cookie"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsanctum-csrf-cookie"></code></pre>
</div>
<div id="execution-error-GETsanctum-csrf-cookie" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsanctum-csrf-cookie"></code></pre>
</div>
<form id="form-GETsanctum-csrf-cookie" data-method="GET" data-path="sanctum/csrf-cookie" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsanctum-csrf-cookie', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsanctum-csrf-cookie" onclick="tryItOut('GETsanctum-csrf-cookie');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsanctum-csrf-cookie" onclick="cancelTryOut('GETsanctum-csrf-cookie');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsanctum-csrf-cookie" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>sanctum/csrf-cookie</code></b>
</p>
</form>


## Authorize a client to access the user&#039;s account.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GEToauth-authorize" hidden>
    <blockquote>Received response<span id="execution-response-status-GEToauth-authorize"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GEToauth-authorize"></code></pre>
</div>
<div id="execution-error-GEToauth-authorize" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GEToauth-authorize"></code></pre>
</div>
<form id="form-GEToauth-authorize" data-method="GET" data-path="oauth/authorize" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GEToauth-authorize', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GEToauth-authorize" onclick="tryItOut('GEToauth-authorize');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GEToauth-authorize" onclick="cancelTryOut('GEToauth-authorize');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GEToauth-authorize" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>oauth/authorize</code></b>
</p>
</form>


## Approve the authorization request.




> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSToauth-authorize" hidden>
    <blockquote>Received response<span id="execution-response-status-POSToauth-authorize"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSToauth-authorize"></code></pre>
</div>
<div id="execution-error-POSToauth-authorize" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSToauth-authorize"></code></pre>
</div>
<form id="form-POSToauth-authorize" data-method="POST" data-path="oauth/authorize" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSToauth-authorize', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSToauth-authorize" onclick="tryItOut('POSToauth-authorize');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSToauth-authorize" onclick="cancelTryOut('POSToauth-authorize');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSToauth-authorize" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>oauth/authorize</code></b>
</p>
</form>


## Deny the authorization request.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEoauth-authorize" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEoauth-authorize"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEoauth-authorize"></code></pre>
</div>
<div id="execution-error-DELETEoauth-authorize" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEoauth-authorize"></code></pre>
</div>
<form id="form-DELETEoauth-authorize" data-method="DELETE" data-path="oauth/authorize" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEoauth-authorize', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEoauth-authorize" onclick="tryItOut('DELETEoauth-authorize');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEoauth-authorize" onclick="cancelTryOut('DELETEoauth-authorize');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEoauth-authorize" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>oauth/authorize</code></b>
</p>
</form>


## Authorize a client to access the user&#039;s account.




> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSToauth-token" hidden>
    <blockquote>Received response<span id="execution-response-status-POSToauth-token"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSToauth-token"></code></pre>
</div>
<div id="execution-error-POSToauth-token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSToauth-token"></code></pre>
</div>
<form id="form-POSToauth-token" data-method="POST" data-path="oauth/token" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSToauth-token', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSToauth-token" onclick="tryItOut('POSToauth-token');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSToauth-token" onclick="cancelTryOut('POSToauth-token');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSToauth-token" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>oauth/token</code></b>
</p>
</form>


## Get all of the authorized tokens for the authenticated user.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GEToauth-tokens" hidden>
    <blockquote>Received response<span id="execution-response-status-GEToauth-tokens"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GEToauth-tokens"></code></pre>
</div>
<div id="execution-error-GEToauth-tokens" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GEToauth-tokens"></code></pre>
</div>
<form id="form-GEToauth-tokens" data-method="GET" data-path="oauth/tokens" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GEToauth-tokens', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GEToauth-tokens" onclick="tryItOut('GEToauth-tokens');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GEToauth-tokens" onclick="cancelTryOut('GEToauth-tokens');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GEToauth-tokens" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>oauth/tokens</code></b>
</p>
</form>


## Delete the given token.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/tokens/aspernatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/tokens/aspernatur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEoauth-tokens--token_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEoauth-tokens--token_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEoauth-tokens--token_id-"></code></pre>
</div>
<div id="execution-error-DELETEoauth-tokens--token_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEoauth-tokens--token_id-"></code></pre>
</div>
<form id="form-DELETEoauth-tokens--token_id-" data-method="DELETE" data-path="oauth/tokens/{token_id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEoauth-tokens--token_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEoauth-tokens--token_id-" onclick="tryItOut('DELETEoauth-tokens--token_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEoauth-tokens--token_id-" onclick="cancelTryOut('DELETEoauth-tokens--token_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEoauth-tokens--token_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>oauth/tokens/{token_id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>token_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token_id" data-endpoint="DELETEoauth-tokens--token_id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Get a fresh transient token cookie for the authenticated user.




> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/token/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSToauth-token-refresh" hidden>
    <blockquote>Received response<span id="execution-response-status-POSToauth-token-refresh"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSToauth-token-refresh"></code></pre>
</div>
<div id="execution-error-POSToauth-token-refresh" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSToauth-token-refresh"></code></pre>
</div>
<form id="form-POSToauth-token-refresh" data-method="POST" data-path="oauth/token/refresh" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSToauth-token-refresh', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSToauth-token-refresh" onclick="tryItOut('POSToauth-token-refresh');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSToauth-token-refresh" onclick="cancelTryOut('POSToauth-token-refresh');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSToauth-token-refresh" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>oauth/token/refresh</code></b>
</p>
</form>


## Get all of the clients for the authenticated user.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GEToauth-clients" hidden>
    <blockquote>Received response<span id="execution-response-status-GEToauth-clients"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GEToauth-clients"></code></pre>
</div>
<div id="execution-error-GEToauth-clients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GEToauth-clients"></code></pre>
</div>
<form id="form-GEToauth-clients" data-method="GET" data-path="oauth/clients" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GEToauth-clients', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GEToauth-clients" onclick="tryItOut('GEToauth-clients');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GEToauth-clients" onclick="cancelTryOut('GEToauth-clients');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GEToauth-clients" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>oauth/clients</code></b>
</p>
</form>


## Store a new client.




> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSToauth-clients" hidden>
    <blockquote>Received response<span id="execution-response-status-POSToauth-clients"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSToauth-clients"></code></pre>
</div>
<div id="execution-error-POSToauth-clients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSToauth-clients"></code></pre>
</div>
<form id="form-POSToauth-clients" data-method="POST" data-path="oauth/clients" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSToauth-clients', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSToauth-clients" onclick="tryItOut('POSToauth-clients');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSToauth-clients" onclick="cancelTryOut('POSToauth-clients');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSToauth-clients" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>oauth/clients</code></b>
</p>
</form>


## Update the given client.




> Example request:

```bash
curl -X PUT \
    "http://localhost/oauth/clients/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients/aut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUToauth-clients--client_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUToauth-clients--client_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUToauth-clients--client_id-"></code></pre>
</div>
<div id="execution-error-PUToauth-clients--client_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUToauth-clients--client_id-"></code></pre>
</div>
<form id="form-PUToauth-clients--client_id-" data-method="PUT" data-path="oauth/clients/{client_id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUToauth-clients--client_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUToauth-clients--client_id-" onclick="tryItOut('PUToauth-clients--client_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUToauth-clients--client_id-" onclick="cancelTryOut('PUToauth-clients--client_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUToauth-clients--client_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>oauth/clients/{client_id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>client_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="client_id" data-endpoint="PUToauth-clients--client_id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Delete the given client.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/clients/occaecati" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients/occaecati"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEoauth-clients--client_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEoauth-clients--client_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEoauth-clients--client_id-"></code></pre>
</div>
<div id="execution-error-DELETEoauth-clients--client_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEoauth-clients--client_id-"></code></pre>
</div>
<form id="form-DELETEoauth-clients--client_id-" data-method="DELETE" data-path="oauth/clients/{client_id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEoauth-clients--client_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEoauth-clients--client_id-" onclick="tryItOut('DELETEoauth-clients--client_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEoauth-clients--client_id-" onclick="cancelTryOut('DELETEoauth-clients--client_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEoauth-clients--client_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>oauth/clients/{client_id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>client_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="client_id" data-endpoint="DELETEoauth-clients--client_id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Get all of the available scopes for the application.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/scopes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GEToauth-scopes" hidden>
    <blockquote>Received response<span id="execution-response-status-GEToauth-scopes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GEToauth-scopes"></code></pre>
</div>
<div id="execution-error-GEToauth-scopes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GEToauth-scopes"></code></pre>
</div>
<form id="form-GEToauth-scopes" data-method="GET" data-path="oauth/scopes" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GEToauth-scopes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GEToauth-scopes" onclick="tryItOut('GEToauth-scopes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GEToauth-scopes" onclick="cancelTryOut('GEToauth-scopes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GEToauth-scopes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>oauth/scopes</code></b>
</p>
</form>


## Get all of the personal access tokens for the authenticated user.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GEToauth-personal-access-tokens" hidden>
    <blockquote>Received response<span id="execution-response-status-GEToauth-personal-access-tokens"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GEToauth-personal-access-tokens"></code></pre>
</div>
<div id="execution-error-GEToauth-personal-access-tokens" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GEToauth-personal-access-tokens"></code></pre>
</div>
<form id="form-GEToauth-personal-access-tokens" data-method="GET" data-path="oauth/personal-access-tokens" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GEToauth-personal-access-tokens', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GEToauth-personal-access-tokens" onclick="tryItOut('GEToauth-personal-access-tokens');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GEToauth-personal-access-tokens" onclick="cancelTryOut('GEToauth-personal-access-tokens');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GEToauth-personal-access-tokens" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>oauth/personal-access-tokens</code></b>
</p>
</form>


## Create a new personal access token for the user.




> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSToauth-personal-access-tokens" hidden>
    <blockquote>Received response<span id="execution-response-status-POSToauth-personal-access-tokens"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSToauth-personal-access-tokens"></code></pre>
</div>
<div id="execution-error-POSToauth-personal-access-tokens" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSToauth-personal-access-tokens"></code></pre>
</div>
<form id="form-POSToauth-personal-access-tokens" data-method="POST" data-path="oauth/personal-access-tokens" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSToauth-personal-access-tokens', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSToauth-personal-access-tokens" onclick="tryItOut('POSToauth-personal-access-tokens');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSToauth-personal-access-tokens" onclick="cancelTryOut('POSToauth-personal-access-tokens');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSToauth-personal-access-tokens" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>oauth/personal-access-tokens</code></b>
</p>
</form>


## Delete the given token.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/personal-access-tokens/neque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens/neque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEoauth-personal-access-tokens--token_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEoauth-personal-access-tokens--token_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEoauth-personal-access-tokens--token_id-"></code></pre>
</div>
<div id="execution-error-DELETEoauth-personal-access-tokens--token_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEoauth-personal-access-tokens--token_id-"></code></pre>
</div>
<form id="form-DELETEoauth-personal-access-tokens--token_id-" data-method="DELETE" data-path="oauth/personal-access-tokens/{token_id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEoauth-personal-access-tokens--token_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEoauth-personal-access-tokens--token_id-" onclick="tryItOut('DELETEoauth-personal-access-tokens--token_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEoauth-personal-access-tokens--token_id-" onclick="cancelTryOut('DELETEoauth-personal-access-tokens--token_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEoauth-personal-access-tokens--token_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>oauth/personal-access-tokens/{token_id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>token_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token_id" data-endpoint="DELETEoauth-personal-access-tokens--token_id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/v1/user




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-user"></code></pre>
</div>
<div id="execution-error-GETapi-v1-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-user"></code></pre>
</div>
<form id="form-GETapi-v1-user" data-method="GET" data-path="api/v1/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-user" onclick="tryItOut('GETapi-v1-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-user" onclick="cancelTryOut('GETapi-v1-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/user</code></b>
</p>
</form>


## api/v1/home




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "lastProducts": [
        {
            "id": 4,
            "name": "Nike Jordan 3",
            "quantity": 100,
            "category_id": 3,
            "user_id": 1,
            "short_desc": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "tag_line": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "content": "<p>ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout&mdash;or a day of getting things done.<\/p>\r\n\r\n<ul>\r\n\t<li>Colour Shown: White\/University Red\/Black<\/li>\r\n\t<li>Style: DJ1196-101<\/li>\r\n<\/ul>",
            "discount_id": 1,
            "seo_keyword": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "seo_description": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "deleted_at": null,
            "created_at": "2021-09-19T14:10:07.000000Z",
            "updated_at": "2022-04-06T09:31:28.000000Z",
            "views": 10,
            "sold": 0,
            "price": 100,
            "image": {
                "id": 6,
                "imageable_id": "4",
                "imageable_type": "App\\Models\\Product",
                "deleted_at": null,
                "created_at": "2021-09-19T14:10:08.000000Z",
                "updated_at": "2021-09-19T14:10:08.000000Z",
                "path": "storage\/products\/16320606080air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg",
                "full_image_path": "http:\/\/localhost\/storage\/products\/16320606080air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg"
            }
        },
        {
            "id": 3,
            "name": "Nike Jordan 2",
            "quantity": 20,
            "category_id": 2,
            "user_id": 1,
            "short_desc": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "tag_line": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "content": "<p>ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout&mdash;or a day of getting things done.<\/p>\r\n\r\n<ul>\r\n\t<li>Colour Shown: White\/University Red\/Black<\/li>\r\n\t<li>Style: DJ1196-101<\/li>\r\n<\/ul>",
            "discount_id": 1,
            "seo_keyword": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "seo_description": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "deleted_at": null,
            "created_at": "2021-09-19T14:07:53.000000Z",
            "updated_at": "2022-04-06T09:35:51.000000Z",
            "views": 16,
            "sold": 0,
            "price": 100,
            "image": {
                "id": 5,
                "imageable_id": "3",
                "imageable_type": "App\\Models\\Product",
                "deleted_at": null,
                "created_at": "2021-09-19T14:07:53.000000Z",
                "updated_at": "2021-09-19T14:07:53.000000Z",
                "path": "storage\/products\/16320604730defy-all-day-training-shoe-LtD2G1.jpeg",
                "full_image_path": "http:\/\/localhost\/storage\/products\/16320604730defy-all-day-training-shoe-LtD2G1.jpeg"
            }
        },
        {
            "id": 2,
            "name": "Nike Jordan 1",
            "quantity": 20,
            "category_id": 1,
            "user_id": 1,
            "short_desc": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "tag_line": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "content": "<p>ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout&mdash;or a day of getting things done.<\/p>\r\n\r\n<ul>\r\n\t<li>Colour Shown: White\/University Red\/Black<\/li>\r\n\t<li>Style: DJ1196-101<\/li>\r\n<\/ul>",
            "discount_id": 1,
            "seo_keyword": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "seo_description": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "deleted_at": null,
            "created_at": "2021-09-19T14:06:58.000000Z",
            "updated_at": "2022-04-06T09:47:50.000000Z",
            "views": 5,
            "sold": 0,
            "price": 100,
            "image": {
                "id": 4,
                "imageable_id": "2",
                "imageable_type": "App\\Models\\Product",
                "deleted_at": null,
                "created_at": "2021-09-19T14:06:58.000000Z",
                "updated_at": "2021-09-19T14:06:58.000000Z",
                "path": "storage\/products\/16320604180air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg",
                "full_image_path": "http:\/\/localhost\/storage\/products\/16320604180air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg"
            }
        },
        {
            "id": 1,
            "name": "NMD 2",
            "quantity": 12,
            "category_id": 1,
            "user_id": 1,
            "short_desc": "12",
            "tag_line": "12",
            "content": "<p>12121212<\/p>",
            "discount_id": 1,
            "seo_keyword": "1212",
            "seo_description": "1212",
            "deleted_at": null,
            "created_at": "2021-09-05T12:43:35.000000Z",
            "updated_at": "2022-04-06T08:41:08.000000Z",
            "views": 3,
            "sold": 0,
            "price": 100,
            "image": {
                "id": 7,
                "imageable_id": "1",
                "imageable_type": "App\\Models\\Product",
                "deleted_at": null,
                "created_at": "2022-04-06T08:41:08.000000Z",
                "updated_at": "2022-04-06T08:41:08.000000Z",
                "path": "storage\/products\/164923446804f37fca8-6bce-43e7-ad07-f57ae3c13142 (1).png",
                "full_image_path": "http:\/\/localhost\/storage\/products\/164923446804f37fca8-6bce-43e7-ad07-f57ae3c13142 (1).png"
            }
        }
    ],
    "topViewProducts": [
        {
            "id": 3,
            "name": "Nike Jordan 2",
            "quantity": 20,
            "category_id": 2,
            "user_id": 1,
            "short_desc": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "tag_line": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "content": "<p>ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout&mdash;or a day of getting things done.<\/p>\r\n\r\n<ul>\r\n\t<li>Colour Shown: White\/University Red\/Black<\/li>\r\n\t<li>Style: DJ1196-101<\/li>\r\n<\/ul>",
            "discount_id": 1,
            "seo_keyword": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "seo_description": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "deleted_at": null,
            "created_at": "2021-09-19T14:07:53.000000Z",
            "updated_at": "2022-04-06T09:35:51.000000Z",
            "views": 16,
            "sold": 0,
            "price": 100,
            "image": {
                "id": 5,
                "imageable_id": "3",
                "imageable_type": "App\\Models\\Product",
                "deleted_at": null,
                "created_at": "2021-09-19T14:07:53.000000Z",
                "updated_at": "2021-09-19T14:07:53.000000Z",
                "path": "storage\/products\/16320604730defy-all-day-training-shoe-LtD2G1.jpeg",
                "full_image_path": "http:\/\/localhost\/storage\/products\/16320604730defy-all-day-training-shoe-LtD2G1.jpeg"
            }
        },
        {
            "id": 4,
            "name": "Nike Jordan 3",
            "quantity": 100,
            "category_id": 3,
            "user_id": 1,
            "short_desc": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "tag_line": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "content": "<p>ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout&mdash;or a day of getting things done.<\/p>\r\n\r\n<ul>\r\n\t<li>Colour Shown: White\/University Red\/Black<\/li>\r\n\t<li>Style: DJ1196-101<\/li>\r\n<\/ul>",
            "discount_id": 1,
            "seo_keyword": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "seo_description": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "deleted_at": null,
            "created_at": "2021-09-19T14:10:07.000000Z",
            "updated_at": "2022-04-06T09:31:28.000000Z",
            "views": 10,
            "sold": 0,
            "price": 100,
            "image": {
                "id": 6,
                "imageable_id": "4",
                "imageable_type": "App\\Models\\Product",
                "deleted_at": null,
                "created_at": "2021-09-19T14:10:08.000000Z",
                "updated_at": "2021-09-19T14:10:08.000000Z",
                "path": "storage\/products\/16320606080air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg",
                "full_image_path": "http:\/\/localhost\/storage\/products\/16320606080air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg"
            }
        },
        {
            "id": 2,
            "name": "Nike Jordan 1",
            "quantity": 20,
            "category_id": 1,
            "user_id": 1,
            "short_desc": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "tag_line": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "content": "<p>ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout&mdash;or a day of getting things done.<\/p>\r\n\r\n<ul>\r\n\t<li>Colour Shown: White\/University Red\/Black<\/li>\r\n\t<li>Style: DJ1196-101<\/li>\r\n<\/ul>",
            "discount_id": 1,
            "seo_keyword": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "seo_description": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "deleted_at": null,
            "created_at": "2021-09-19T14:06:58.000000Z",
            "updated_at": "2022-04-06T09:47:50.000000Z",
            "views": 5,
            "sold": 0,
            "price": 100,
            "image": {
                "id": 4,
                "imageable_id": "2",
                "imageable_type": "App\\Models\\Product",
                "deleted_at": null,
                "created_at": "2021-09-19T14:06:58.000000Z",
                "updated_at": "2021-09-19T14:06:58.000000Z",
                "path": "storage\/products\/16320604180air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg",
                "full_image_path": "http:\/\/localhost\/storage\/products\/16320604180air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg"
            }
        },
        {
            "id": 1,
            "name": "NMD 2",
            "quantity": 12,
            "category_id": 1,
            "user_id": 1,
            "short_desc": "12",
            "tag_line": "12",
            "content": "<p>12121212<\/p>",
            "discount_id": 1,
            "seo_keyword": "1212",
            "seo_description": "1212",
            "deleted_at": null,
            "created_at": "2021-09-05T12:43:35.000000Z",
            "updated_at": "2022-04-06T08:41:08.000000Z",
            "views": 3,
            "sold": 0,
            "price": 100,
            "image": {
                "id": 7,
                "imageable_id": "1",
                "imageable_type": "App\\Models\\Product",
                "deleted_at": null,
                "created_at": "2022-04-06T08:41:08.000000Z",
                "updated_at": "2022-04-06T08:41:08.000000Z",
                "path": "storage\/products\/164923446804f37fca8-6bce-43e7-ad07-f57ae3c13142 (1).png",
                "full_image_path": "http:\/\/localhost\/storage\/products\/164923446804f37fca8-6bce-43e7-ad07-f57ae3c13142 (1).png"
            }
        }
    ],
    "topSoldProducts": [
        {
            "id": 1,
            "name": "NMD 2",
            "quantity": 12,
            "category_id": 1,
            "user_id": 1,
            "short_desc": "12",
            "tag_line": "12",
            "content": "<p>12121212<\/p>",
            "discount_id": 1,
            "seo_keyword": "1212",
            "seo_description": "1212",
            "deleted_at": null,
            "created_at": "2021-09-05T12:43:35.000000Z",
            "updated_at": "2022-04-06T08:41:08.000000Z",
            "views": 3,
            "sold": 0,
            "price": 100,
            "image": {
                "id": 7,
                "imageable_id": "1",
                "imageable_type": "App\\Models\\Product",
                "deleted_at": null,
                "created_at": "2022-04-06T08:41:08.000000Z",
                "updated_at": "2022-04-06T08:41:08.000000Z",
                "path": "storage\/products\/164923446804f37fca8-6bce-43e7-ad07-f57ae3c13142 (1).png",
                "full_image_path": "http:\/\/localhost\/storage\/products\/164923446804f37fca8-6bce-43e7-ad07-f57ae3c13142 (1).png"
            }
        },
        {
            "id": 2,
            "name": "Nike Jordan 1",
            "quantity": 20,
            "category_id": 1,
            "user_id": 1,
            "short_desc": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "tag_line": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "content": "<p>ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout&mdash;or a day of getting things done.<\/p>\r\n\r\n<ul>\r\n\t<li>Colour Shown: White\/University Red\/Black<\/li>\r\n\t<li>Style: DJ1196-101<\/li>\r\n<\/ul>",
            "discount_id": 1,
            "seo_keyword": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "seo_description": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "deleted_at": null,
            "created_at": "2021-09-19T14:06:58.000000Z",
            "updated_at": "2022-04-06T09:47:50.000000Z",
            "views": 5,
            "sold": 0,
            "price": 100,
            "image": {
                "id": 4,
                "imageable_id": "2",
                "imageable_type": "App\\Models\\Product",
                "deleted_at": null,
                "created_at": "2021-09-19T14:06:58.000000Z",
                "updated_at": "2021-09-19T14:06:58.000000Z",
                "path": "storage\/products\/16320604180air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg",
                "full_image_path": "http:\/\/localhost\/storage\/products\/16320604180air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg"
            }
        },
        {
            "id": 3,
            "name": "Nike Jordan 2",
            "quantity": 20,
            "category_id": 2,
            "user_id": 1,
            "short_desc": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "tag_line": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "content": "<p>ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout&mdash;or a day of getting things done.<\/p>\r\n\r\n<ul>\r\n\t<li>Colour Shown: White\/University Red\/Black<\/li>\r\n\t<li>Style: DJ1196-101<\/li>\r\n<\/ul>",
            "discount_id": 1,
            "seo_keyword": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "seo_description": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "deleted_at": null,
            "created_at": "2021-09-19T14:07:53.000000Z",
            "updated_at": "2022-04-06T09:35:51.000000Z",
            "views": 16,
            "sold": 0,
            "price": 100,
            "image": {
                "id": 5,
                "imageable_id": "3",
                "imageable_type": "App\\Models\\Product",
                "deleted_at": null,
                "created_at": "2021-09-19T14:07:53.000000Z",
                "updated_at": "2021-09-19T14:07:53.000000Z",
                "path": "storage\/products\/16320604730defy-all-day-training-shoe-LtD2G1.jpeg",
                "full_image_path": "http:\/\/localhost\/storage\/products\/16320604730defy-all-day-training-shoe-LtD2G1.jpeg"
            }
        },
        {
            "id": 4,
            "name": "Nike Jordan 3",
            "quantity": 100,
            "category_id": 3,
            "user_id": 1,
            "short_desc": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "tag_line": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "content": "<p>ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout&mdash;or a day of getting things done.<\/p>\r\n\r\n<ul>\r\n\t<li>Colour Shown: White\/University Red\/Black<\/li>\r\n\t<li>Style: DJ1196-101<\/li>\r\n<\/ul>",
            "discount_id": 1,
            "seo_keyword": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "seo_description": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "deleted_at": null,
            "created_at": "2021-09-19T14:10:07.000000Z",
            "updated_at": "2022-04-06T09:31:28.000000Z",
            "views": 10,
            "sold": 0,
            "price": 100,
            "image": {
                "id": 6,
                "imageable_id": "4",
                "imageable_type": "App\\Models\\Product",
                "deleted_at": null,
                "created_at": "2021-09-19T14:10:08.000000Z",
                "updated_at": "2021-09-19T14:10:08.000000Z",
                "path": "storage\/products\/16320606080air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg",
                "full_image_path": "http:\/\/localhost\/storage\/products\/16320606080air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg"
            }
        }
    ]
}
```
<div id="execution-results-GETapi-v1-home" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-home"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-home"></code></pre>
</div>
<div id="execution-error-GETapi-v1-home" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-home"></code></pre>
</div>
<form id="form-GETapi-v1-home" data-method="GET" data-path="api/v1/home" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-home', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-home" onclick="tryItOut('GETapi-v1-home');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-home" onclick="cancelTryOut('GETapi-v1-home');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-home" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/home</code></b>
</p>
</form>


## api/v1/products/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/products/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/products/aut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "product": null,
    "mightYouLikeProducts": [
        {
            "id": 1,
            "name": "NMD 2",
            "quantity": 12,
            "category_id": 1,
            "user_id": 1,
            "short_desc": "12",
            "tag_line": "12",
            "content": "<p>12121212<\/p>",
            "discount_id": 1,
            "seo_keyword": "1212",
            "seo_description": "1212",
            "deleted_at": null,
            "created_at": "2021-09-05T12:43:35.000000Z",
            "updated_at": "2022-04-06T08:41:08.000000Z",
            "views": 3,
            "sold": 0,
            "price": 100,
            "image": {
                "id": 7,
                "imageable_id": "1",
                "imageable_type": "App\\Models\\Product",
                "deleted_at": null,
                "created_at": "2022-04-06T08:41:08.000000Z",
                "updated_at": "2022-04-06T08:41:08.000000Z",
                "path": "storage\/products\/164923446804f37fca8-6bce-43e7-ad07-f57ae3c13142 (1).png",
                "full_image_path": "http:\/\/localhost\/storage\/products\/164923446804f37fca8-6bce-43e7-ad07-f57ae3c13142 (1).png"
            }
        },
        {
            "id": 2,
            "name": "Nike Jordan 1",
            "quantity": 20,
            "category_id": 1,
            "user_id": 1,
            "short_desc": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "tag_line": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "content": "<p>ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout&mdash;or a day of getting things done.<\/p>\r\n\r\n<ul>\r\n\t<li>Colour Shown: White\/University Red\/Black<\/li>\r\n\t<li>Style: DJ1196-101<\/li>\r\n<\/ul>",
            "discount_id": 1,
            "seo_keyword": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "seo_description": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "deleted_at": null,
            "created_at": "2021-09-19T14:06:58.000000Z",
            "updated_at": "2022-04-06T09:47:50.000000Z",
            "views": 5,
            "sold": 0,
            "price": 100,
            "image": {
                "id": 4,
                "imageable_id": "2",
                "imageable_type": "App\\Models\\Product",
                "deleted_at": null,
                "created_at": "2021-09-19T14:06:58.000000Z",
                "updated_at": "2021-09-19T14:06:58.000000Z",
                "path": "storage\/products\/16320604180air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg",
                "full_image_path": "http:\/\/localhost\/storage\/products\/16320604180air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg"
            }
        },
        {
            "id": 3,
            "name": "Nike Jordan 2",
            "quantity": 20,
            "category_id": 2,
            "user_id": 1,
            "short_desc": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "tag_line": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "content": "<p>ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout&mdash;or a day of getting things done.<\/p>\r\n\r\n<ul>\r\n\t<li>Colour Shown: White\/University Red\/Black<\/li>\r\n\t<li>Style: DJ1196-101<\/li>\r\n<\/ul>",
            "discount_id": 1,
            "seo_keyword": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "seo_description": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "deleted_at": null,
            "created_at": "2021-09-19T14:07:53.000000Z",
            "updated_at": "2022-04-06T09:35:51.000000Z",
            "views": 16,
            "sold": 0,
            "price": 100,
            "image": {
                "id": 5,
                "imageable_id": "3",
                "imageable_type": "App\\Models\\Product",
                "deleted_at": null,
                "created_at": "2021-09-19T14:07:53.000000Z",
                "updated_at": "2021-09-19T14:07:53.000000Z",
                "path": "storage\/products\/16320604730defy-all-day-training-shoe-LtD2G1.jpeg",
                "full_image_path": "http:\/\/localhost\/storage\/products\/16320604730defy-all-day-training-shoe-LtD2G1.jpeg"
            }
        },
        {
            "id": 4,
            "name": "Nike Jordan 3",
            "quantity": 100,
            "category_id": 3,
            "user_id": 1,
            "short_desc": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "tag_line": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "content": "<p>ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout&mdash;or a day of getting things done.<\/p>\r\n\r\n<ul>\r\n\t<li>Colour Shown: White\/University Red\/Black<\/li>\r\n\t<li>Style: DJ1196-101<\/li>\r\n<\/ul>",
            "discount_id": 1,
            "seo_keyword": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "seo_description": "ake on everyday challenges in the Nike Defy All Day. Leather up top and rubber traction on the bottom create a durable design that lasts the rigours of tough training sessions. Soft cushioning carries comfort through your workout—or a day of getting things done.\r\n\r\nColour Shown: White\/University Red\/Black\r\nStyle: DJ1196-101",
            "deleted_at": null,
            "created_at": "2021-09-19T14:10:07.000000Z",
            "updated_at": "2022-04-06T09:31:28.000000Z",
            "views": 10,
            "sold": 0,
            "price": 100,
            "image": {
                "id": 6,
                "imageable_id": "4",
                "imageable_type": "App\\Models\\Product",
                "deleted_at": null,
                "created_at": "2021-09-19T14:10:08.000000Z",
                "updated_at": "2021-09-19T14:10:08.000000Z",
                "path": "storage\/products\/16320606080air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg",
                "full_image_path": "http:\/\/localhost\/storage\/products\/16320606080air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg"
            }
        }
    ]
}
```
<div id="execution-results-GETapi-v1-products--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-products--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-products--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-products--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-products--id-"></code></pre>
</div>
<form id="form-GETapi-v1-products--id-" data-method="GET" data-path="api/v1/products/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-products--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-products--id-" onclick="tryItOut('GETapi-v1-products--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-products--id-" onclick="cancelTryOut('GETapi-v1-products--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-products--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/products/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-products--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/v1/login




> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-login"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-login"></code></pre>
</div>
<form id="form-POSTapi-v1-login" data-method="POST" data-path="api/v1/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-login" onclick="tryItOut('POSTapi-v1-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-login" onclick="cancelTryOut('POSTapi-v1-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/login</code></b>
</p>
</form>


## api/v1/signup




> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/signup" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/signup"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-signup" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-signup"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-signup"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-signup" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-signup"></code></pre>
</div>
<form id="form-POSTapi-v1-signup" data-method="POST" data-path="api/v1/signup" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-signup', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-signup" onclick="tryItOut('POSTapi-v1-signup');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-signup" onclick="cancelTryOut('POSTapi-v1-signup');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-signup" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/signup</code></b>
</p>
</form>


## api/cart/items




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/cart/items" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cart/items"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Session store not set on request.",
    "exception": "RuntimeException",
    "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Request.php",
    "line": 500,
    "trace": [
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/app\/Http\/Controllers\/Api\/CartController.php",
            "line": 97,
            "function": "session",
            "class": "Illuminate\\Http\\Request",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "getItems",
            "class": "App\\Http\\Controllers\\Api\\CartController",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 261,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 204,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 695,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 697,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 672,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 52,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Middleware\/TrustProxies.php",
            "line": 39,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Http\\Middleware\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 651,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 299,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 978,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 295,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 167,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-cart-items" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cart-items"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cart-items"></code></pre>
</div>
<div id="execution-error-GETapi-cart-items" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cart-items"></code></pre>
</div>
<form id="form-GETapi-cart-items" data-method="GET" data-path="api/cart/items" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cart-items', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cart-items" onclick="tryItOut('GETapi-cart-items');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cart-items" onclick="cancelTryOut('GETapi-cart-items');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cart-items" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cart/items</code></b>
</p>
</form>


## api/cart/item/{id}




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/cart/item/omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cart/item/omnis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-cart-item--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-cart-item--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-cart-item--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-cart-item--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-cart-item--id-"></code></pre>
</div>
<form id="form-DELETEapi-cart-item--id-" data-method="DELETE" data-path="api/cart/item/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-cart-item--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-cart-item--id-" onclick="tryItOut('DELETEapi-cart-item--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-cart-item--id-" onclick="cancelTryOut('DELETEapi-cart-item--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-cart-item--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/cart/item/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-cart-item--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/cart/items/delete




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/cart/items/delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cart/items/delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-cart-items-delete" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-cart-items-delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-cart-items-delete"></code></pre>
</div>
<div id="execution-error-DELETEapi-cart-items-delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-cart-items-delete"></code></pre>
</div>
<form id="form-DELETEapi-cart-items-delete" data-method="DELETE" data-path="api/cart/items/delete" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-cart-items-delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-cart-items-delete" onclick="tryItOut('DELETEapi-cart-items-delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-cart-items-delete" onclick="cancelTryOut('DELETEapi-cart-items-delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-cart-items-delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/cart/items/delete</code></b>
</p>
</form>


## api/cart/items/{id}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/cart/items/soluta" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cart/items/soluta"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-cart-items--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-cart-items--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cart-items--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-cart-items--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cart-items--id-"></code></pre>
</div>
<form id="form-POSTapi-cart-items--id-" data-method="POST" data-path="api/cart/items/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-cart-items--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-cart-items--id-" onclick="tryItOut('POSTapi-cart-items--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-cart-items--id-" onclick="cancelTryOut('POSTapi-cart-items--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-cart-items--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/cart/items/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-cart-items--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/cart/items/{id}/{quantity}




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/cart/items/ratione/non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cart/items/ratione/non"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-cart-items--id---quantity-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-cart-items--id---quantity-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-cart-items--id---quantity-"></code></pre>
</div>
<div id="execution-error-PUTapi-cart-items--id---quantity-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-cart-items--id---quantity-"></code></pre>
</div>
<form id="form-PUTapi-cart-items--id---quantity-" data-method="PUT" data-path="api/cart/items/{id}/{quantity}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-cart-items--id---quantity-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-cart-items--id---quantity-" onclick="tryItOut('PUTapi-cart-items--id---quantity-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-cart-items--id---quantity-" onclick="cancelTryOut('PUTapi-cart-items--id---quantity-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-cart-items--id---quantity-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/cart/items/{id}/{quantity}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-cart-items--id---quantity-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>quantity</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="quantity" data-endpoint="PUTapi-cart-items--id---quantity-" data-component="url" required  hidden>
<br>

</p>
</form>


## admin/user




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="http://localhost/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">SHOP CMS 1.0</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                User
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/user" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/user/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Category
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/category" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/category/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant Values
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant_value" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant_value/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Product
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/product" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/product/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div style="padding:20px">


                
                
                </div>
            </div>

        </div>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                        <div class="row">
        <div class="col-md-12">
            <div class="card">




                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>FullName</th>
                            <th>Address</th>
                            <th>Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                                                    <tr>
                                <td>33</td>
                                <td>luann4099@gmail.com</td>
                                <td>luann4099@gmail.com</td>
                                <td>Nguyen T Luan</td>
                                <td></td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/user/edit/33">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/user/delete/33">Xoá</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>32</td>
                                <td>testssss</td>
                                <td>v@s.com</td>
                                <td>sạhdks</td>
                                <td></td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/user/edit/32">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/user/delete/32">Xoá</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>3</td>
                                <td>Prof. Gwen Waters Sr.</td>
                                <td>beginlive@example.com</td>
                                <td>Dell Botsford Sr.</td>
                                <td></td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/user/edit/3">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/user/delete/3">Xoá</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>30</td>
                                <td>Dr. Jeramie Schamberger DDS</td>
                                <td>ola17@example.org</td>
                                <td>Hal Collier</td>
                                <td></td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/user/edit/30">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/user/delete/30">Xoá</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>29</td>
                                <td>Prof. Katherine Reynolds</td>
                                <td>nward@example.net</td>
                                <td>Corine Mayert II</td>
                                <td></td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/user/edit/29">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/user/delete/29">Xoá</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>28</td>
                                <td>Adrian Yundt IV</td>
                                <td>mohammad31@example.org</td>
                                <td>Mrs. Alta Schuppe</td>
                                <td></td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/user/edit/28">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/user/delete/28">Xoá</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>27</td>
                                <td>Wade Fritsch IV</td>
                                <td>lupe.aufderhar@example.org</td>
                                <td>Mrs. Lyla Borer</td>
                                <td></td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/user/edit/27">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/user/delete/27">Xoá</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>26</td>
                                <td>Lottie Gottlieb</td>
                                <td>susanna27@example.com</td>
                                <td>Prof. Ashtyn Kautzer IV</td>
                                <td></td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/user/edit/26">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/user/delete/26">Xoá</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>25</td>
                                <td>Prof. Wallace Howell</td>
                                <td>faye50@example.net</td>
                                <td>Prof. Wendy Lehner I</td>
                                <td></td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/user/edit/25">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/user/delete/25">Xoá</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>24</td>
                                <td>Stephany Huels</td>
                                <td>caitlyn53@example.net</td>
                                <td>Kyra Bailey</td>
                                <td></td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/user/edit/24">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/user/delete/24">Xoá</a>
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">

                    <div class="float-right">
                        <nav>
        <ul class="pagination">
            
                            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            
            
                            
                
                
                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://localhost/admin/user?page=2">2</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://localhost/admin/user?page=3">3</a></li>
                                                                        
            
                            <li class="page-item">
                    <a class="page-link" href="http://localhost/admin/user?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                </li>
                    </ul>
    </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="http://localhost/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://localhost/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>

```
<div id="execution-results-GETadmin-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-user"></code></pre>
</div>
<div id="execution-error-GETadmin-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-user"></code></pre>
</div>
<form id="form-GETadmin-user" data-method="GET" data-path="admin/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-user" onclick="tryItOut('GETadmin-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-user" onclick="cancelTryOut('GETadmin-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/user</code></b>
</p>
</form>


## admin/user/add




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/user/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="http://localhost/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">SHOP CMS 1.0</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                User
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/user" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/user/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Category
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/category" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/category/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant Values
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant_value" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant_value/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Product
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/product" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/product/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div style="padding:20px">


                
                
                </div>
            </div>

        </div>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                        <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Add User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="http://localhost/admin/user/add">
                    <input type="hidden" name="_token" value="lfHaUmkeYzfpRYrU1LOeIMkvOB9HRssrpjj53j5o">                    <div class="card-body">
                        <div class="form-group">
                            <label for="">UserName</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name"
                                   value="">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email"
                                   value="">
                                                    </div>
                        <div class="form-group">
                            <label for="">FullName</label>
                            <input type="text" name="full_name" class="form-control" placeholder="Enter Username"
                                   value="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password"
                                   value="">
                                                    </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter Phone"
                                   value="">
                        </div>

                        <div class="form-group">
                            <label>Level</label>
                            <select name="level" class="form-control">
                                <option value="1">Admin</option>
                                <option value="2">Staff</option>
                                <option value="3">User</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="http://localhost/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://localhost/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>

```
<div id="execution-results-GETadmin-user-add" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-user-add"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-user-add"></code></pre>
</div>
<div id="execution-error-GETadmin-user-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-user-add"></code></pre>
</div>
<form id="form-GETadmin-user-add" data-method="GET" data-path="admin/user/add" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-user-add', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-user-add" onclick="tryItOut('GETadmin-user-add');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-user-add" onclick="cancelTryOut('GETadmin-user-add');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-user-add" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/user/add</code></b>
</p>
</form>


## admin/user/add




> Example request:

```bash
curl -X POST \
    "http://localhost/admin/user/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-user-add" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-user-add"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-user-add"></code></pre>
</div>
<div id="execution-error-POSTadmin-user-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-user-add"></code></pre>
</div>
<form id="form-POSTadmin-user-add" data-method="POST" data-path="admin/user/add" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-user-add', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-user-add" onclick="tryItOut('POSTadmin-user-add');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-user-add" onclick="cancelTryOut('POSTadmin-user-add');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-user-add" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/user/add</code></b>
</p>
</form>


## admin/user/edit/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/user/edit/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/edit/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Trying to get property 'id' of non-object (View: \/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/resources\/views\/be\/user\/edit.blade.php)",
    "exception": "Facade\\Ignition\\Exceptions\\ViewException",
    "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/resources\/views\/be\/user\/edit.blade.php",
    "line": 12,
    "trace": [
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/resources\/views\/be\/user\/edit.blade.php",
            "line": 12,
            "function": "handleError",
            "class": "Illuminate\\Foundation\\Bootstrap\\HandleExceptions",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
            "line": 107,
            "function": "require"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
            "line": 108,
            "function": "Illuminate\\Filesystem\\{closure}",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
            "line": 58,
            "function": "getRequire",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
            "line": 61,
            "function": "evaluatePath",
            "class": "Illuminate\\View\\Engines\\PhpEngine",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php",
            "line": 37,
            "function": "get",
            "class": "Illuminate\\View\\Engines\\CompilerEngine",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 139,
            "function": "get",
            "class": "Facade\\Ignition\\Views\\Engines\\CompilerEngine",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 122,
            "function": "getContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 91,
            "function": "renderContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Response.php",
            "line": 69,
            "function": "render",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Response.php",
            "line": 35,
            "function": "setContent",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 794,
            "function": "__construct",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 763,
            "function": "toResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 695,
            "function": "prepareResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/VerifyCsrfToken.php",
            "line": 78,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Middleware\/ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php",
            "line": 64,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Cookie\/Middleware\/AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Cookie\/Middleware\/EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 697,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 672,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 38,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Middleware\/TrustProxies.php",
            "line": 39,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Http\\Middleware\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 651,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 299,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 978,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 295,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 167,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETadmin-user-edit--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-user-edit--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-user-edit--id-"></code></pre>
</div>
<div id="execution-error-GETadmin-user-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-user-edit--id-"></code></pre>
</div>
<form id="form-GETadmin-user-edit--id-" data-method="GET" data-path="admin/user/edit/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-user-edit--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-user-edit--id-" onclick="tryItOut('GETadmin-user-edit--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-user-edit--id-" onclick="cancelTryOut('GETadmin-user-edit--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-user-edit--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/user/edit/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-user-edit--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## admin/user/edit/{id}




> Example request:

```bash
curl -X POST \
    "http://localhost/admin/user/edit/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/edit/aut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-user-edit--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-user-edit--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-user-edit--id-"></code></pre>
</div>
<div id="execution-error-POSTadmin-user-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-user-edit--id-"></code></pre>
</div>
<form id="form-POSTadmin-user-edit--id-" data-method="POST" data-path="admin/user/edit/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-user-edit--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-user-edit--id-" onclick="tryItOut('POSTadmin-user-edit--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-user-edit--id-" onclick="cancelTryOut('POSTadmin-user-edit--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-user-edit--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/user/edit/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTadmin-user-edit--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## admin/user/delete/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/user/delete/hic" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/delete/hic"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/admin/user/edit/qui'" />

        <title>Redirecting to http://localhost/admin/user/edit/qui</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/admin/user/edit/qui">http://localhost/admin/user/edit/qui</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-user-delete--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-user-delete--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-user-delete--id-"></code></pre>
</div>
<div id="execution-error-GETadmin-user-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-user-delete--id-"></code></pre>
</div>
<form id="form-GETadmin-user-delete--id-" data-method="GET" data-path="admin/user/delete/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-user-delete--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-user-delete--id-" onclick="tryItOut('GETadmin-user-delete--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-user-delete--id-" onclick="cancelTryOut('GETadmin-user-delete--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-user-delete--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/user/delete/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-user-delete--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## admin/category




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="http://localhost/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">SHOP CMS 1.0</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                User
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/user" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/user/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Category
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/category" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/category/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant Values
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant_value" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant_value/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Product
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/product" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/product/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div style="padding:20px">


                                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                        Xoá thất bại
                    </div>
                
                
                </div>
            </div>

        </div>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                        <div class="row">
        <div class="col-md-12">
            <div class="card">




                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>Parent Category</th>
                        </tr>
                        </thead>
                        <tbody>
                                                    <tr>
                                <td>2</td>
                                <td>Giày Adidas</td>
                                <td>

                                                                            <span class="badge badge-primary">Giày</span>
                                    
                                                                    </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/category/edit/2">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/category/delete/2">Xoá</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>3</td>
                                <td>Giày Rebook</td>
                                <td>

                                                                            <span class="badge badge-primary">Giày</span>
                                    
                                                                    </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/category/edit/3">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/category/delete/3">Xoá</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>1</td>
                                <td>Giày</td>
                                <td>

                                    
                                                                            <span class="badge badge-primary">Do not have parent</span>
                                                                        </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/category/edit/1">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/category/delete/1">Xoá</a>
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">

                    <div class="float-right">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="http://localhost/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://localhost/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>

```
<div id="execution-results-GETadmin-category" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-category"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-category"></code></pre>
</div>
<div id="execution-error-GETadmin-category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-category"></code></pre>
</div>
<form id="form-GETadmin-category" data-method="GET" data-path="admin/category" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-category', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-category" onclick="tryItOut('GETadmin-category');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-category" onclick="cancelTryOut('GETadmin-category');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-category" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/category</code></b>
</p>
</form>


## admin/category/add




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/category/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="http://localhost/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">SHOP CMS 1.0</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                User
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/user" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/user/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Category
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/category" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/category/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant Values
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant_value" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant_value/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Product
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/product" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/product/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div style="padding:20px">


                
                
                </div>
            </div>

        </div>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                        <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Add Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="http://localhost/admin/category/add">
                    <input type="hidden" name="_token" value="lfHaUmkeYzfpRYrU1LOeIMkvOB9HRssrpjj53j5o">                    <div class="card-body">
                        <div class="form-group">
                            <label for="">UserName</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name"
                                   value="">
                        </div>

                        <div class="form-group">
                            <label for="">Parent Category</label>
                            <select name="parent_id" class="form-control">
                                <option value="0">No Parent</option>
                                                                    <option value="1">Giày</option>
                                                                    <option value="2">Giày Adidas</option>
                                                                    <option value="3">Giày Rebook</option>
                                                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="http://localhost/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://localhost/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>

```
<div id="execution-results-GETadmin-category-add" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-category-add"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-category-add"></code></pre>
</div>
<div id="execution-error-GETadmin-category-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-category-add"></code></pre>
</div>
<form id="form-GETadmin-category-add" data-method="GET" data-path="admin/category/add" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-category-add', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-category-add" onclick="tryItOut('GETadmin-category-add');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-category-add" onclick="cancelTryOut('GETadmin-category-add');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-category-add" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/category/add</code></b>
</p>
</form>


## admin/category/add




> Example request:

```bash
curl -X POST \
    "http://localhost/admin/category/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-category-add" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-category-add"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-category-add"></code></pre>
</div>
<div id="execution-error-POSTadmin-category-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-category-add"></code></pre>
</div>
<form id="form-POSTadmin-category-add" data-method="POST" data-path="admin/category/add" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-category-add', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-category-add" onclick="tryItOut('POSTadmin-category-add');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-category-add" onclick="cancelTryOut('POSTadmin-category-add');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-category-add" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/category/add</code></b>
</p>
</form>


## admin/category/edit/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/category/edit/doloremque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category/edit/doloremque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Trying to get property 'id' of non-object (View: \/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/resources\/views\/be\/category\/edit.blade.php)",
    "exception": "Facade\\Ignition\\Exceptions\\ViewException",
    "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/resources\/views\/be\/category\/edit.blade.php",
    "line": 12,
    "trace": [
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/resources\/views\/be\/category\/edit.blade.php",
            "line": 12,
            "function": "handleError",
            "class": "Illuminate\\Foundation\\Bootstrap\\HandleExceptions",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
            "line": 107,
            "function": "require"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
            "line": 108,
            "function": "Illuminate\\Filesystem\\{closure}",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
            "line": 58,
            "function": "getRequire",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
            "line": 61,
            "function": "evaluatePath",
            "class": "Illuminate\\View\\Engines\\PhpEngine",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php",
            "line": 37,
            "function": "get",
            "class": "Illuminate\\View\\Engines\\CompilerEngine",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 139,
            "function": "get",
            "class": "Facade\\Ignition\\Views\\Engines\\CompilerEngine",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 122,
            "function": "getContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 91,
            "function": "renderContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Response.php",
            "line": 69,
            "function": "render",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Response.php",
            "line": 35,
            "function": "setContent",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 794,
            "function": "__construct",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 763,
            "function": "toResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 695,
            "function": "prepareResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/VerifyCsrfToken.php",
            "line": 78,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Middleware\/ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php",
            "line": 64,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Cookie\/Middleware\/AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Cookie\/Middleware\/EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 697,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 672,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 38,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Middleware\/TrustProxies.php",
            "line": 39,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Http\\Middleware\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 651,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 299,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 978,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 295,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 167,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETadmin-category-edit--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-category-edit--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-category-edit--id-"></code></pre>
</div>
<div id="execution-error-GETadmin-category-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-category-edit--id-"></code></pre>
</div>
<form id="form-GETadmin-category-edit--id-" data-method="GET" data-path="admin/category/edit/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-category-edit--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-category-edit--id-" onclick="tryItOut('GETadmin-category-edit--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-category-edit--id-" onclick="cancelTryOut('GETadmin-category-edit--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-category-edit--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/category/edit/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-category-edit--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## admin/category/edit/{id}




> Example request:

```bash
curl -X POST \
    "http://localhost/admin/category/edit/labore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category/edit/labore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-category-edit--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-category-edit--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-category-edit--id-"></code></pre>
</div>
<div id="execution-error-POSTadmin-category-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-category-edit--id-"></code></pre>
</div>
<form id="form-POSTadmin-category-edit--id-" data-method="POST" data-path="admin/category/edit/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-category-edit--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-category-edit--id-" onclick="tryItOut('POSTadmin-category-edit--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-category-edit--id-" onclick="cancelTryOut('POSTadmin-category-edit--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-category-edit--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/category/edit/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTadmin-category-edit--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## admin/category/delete/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/category/delete/libero" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category/delete/libero"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/admin/category/edit/doloremque'" />

        <title>Redirecting to http://localhost/admin/category/edit/doloremque</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/admin/category/edit/doloremque">http://localhost/admin/category/edit/doloremque</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-category-delete--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-category-delete--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-category-delete--id-"></code></pre>
</div>
<div id="execution-error-GETadmin-category-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-category-delete--id-"></code></pre>
</div>
<form id="form-GETadmin-category-delete--id-" data-method="GET" data-path="admin/category/delete/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-category-delete--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-category-delete--id-" onclick="tryItOut('GETadmin-category-delete--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-category-delete--id-" onclick="cancelTryOut('GETadmin-category-delete--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-category-delete--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/category/delete/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-category-delete--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## admin/variant




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/variant" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/variant"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="http://localhost/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">SHOP CMS 1.0</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                User
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/user" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/user/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Category
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/category" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/category/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant Values
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant_value" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant_value/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Product
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/product" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/product/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div style="padding:20px">


                                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                        Xoá thất bại
                    </div>
                
                
                </div>
            </div>

        </div>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                        </tr>
                        </thead>
                        <tbody>
                                                    <tr>
                                <td>2</td>
                                <td>Material</td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/variant/edit/2">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/variant/delete/2">Xoá</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>1</td>
                                <td>Color</td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/variant/edit/1">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/variant/delete/1">Xoá</a>
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">

                    <div class="float-right">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="http://localhost/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://localhost/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>

```
<div id="execution-results-GETadmin-variant" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-variant"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-variant"></code></pre>
</div>
<div id="execution-error-GETadmin-variant" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-variant"></code></pre>
</div>
<form id="form-GETadmin-variant" data-method="GET" data-path="admin/variant" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-variant', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-variant" onclick="tryItOut('GETadmin-variant');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-variant" onclick="cancelTryOut('GETadmin-variant');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-variant" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/variant</code></b>
</p>
</form>


## admin/variant/add




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/variant/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/variant/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="http://localhost/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">SHOP CMS 1.0</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                User
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/user" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/user/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Category
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/category" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/category/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant Values
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant_value" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant_value/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Product
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/product" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/product/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div style="padding:20px">


                
                
                </div>
            </div>

        </div>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                        <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Add Variant</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="http://localhost/admin/variant/add">
                    <input type="hidden" name="_token" value="lfHaUmkeYzfpRYrU1LOeIMkvOB9HRssrpjj53j5o">                    <div class="card-body">
                        <div class="form-group">
                            <label for="">UserName</label>
                            <input type="text" name="name" class="form-control" placeholder="Name"
                                   value="">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="http://localhost/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://localhost/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>

```
<div id="execution-results-GETadmin-variant-add" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-variant-add"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-variant-add"></code></pre>
</div>
<div id="execution-error-GETadmin-variant-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-variant-add"></code></pre>
</div>
<form id="form-GETadmin-variant-add" data-method="GET" data-path="admin/variant/add" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-variant-add', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-variant-add" onclick="tryItOut('GETadmin-variant-add');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-variant-add" onclick="cancelTryOut('GETadmin-variant-add');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-variant-add" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/variant/add</code></b>
</p>
</form>


## admin/variant/add




> Example request:

```bash
curl -X POST \
    "http://localhost/admin/variant/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/variant/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-variant-add" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-variant-add"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-variant-add"></code></pre>
</div>
<div id="execution-error-POSTadmin-variant-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-variant-add"></code></pre>
</div>
<form id="form-POSTadmin-variant-add" data-method="POST" data-path="admin/variant/add" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-variant-add', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-variant-add" onclick="tryItOut('POSTadmin-variant-add');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-variant-add" onclick="cancelTryOut('POSTadmin-variant-add');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-variant-add" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/variant/add</code></b>
</p>
</form>


## admin/variant/edit/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/variant/edit/nemo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/variant/edit/nemo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Trying to get property 'id' of non-object (View: \/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/resources\/views\/be\/variant\/edit.blade.php)",
    "exception": "Facade\\Ignition\\Exceptions\\ViewException",
    "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/resources\/views\/be\/variant\/edit.blade.php",
    "line": 12,
    "trace": [
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/resources\/views\/be\/variant\/edit.blade.php",
            "line": 12,
            "function": "handleError",
            "class": "Illuminate\\Foundation\\Bootstrap\\HandleExceptions",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
            "line": 107,
            "function": "require"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
            "line": 108,
            "function": "Illuminate\\Filesystem\\{closure}",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
            "line": 58,
            "function": "getRequire",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
            "line": 61,
            "function": "evaluatePath",
            "class": "Illuminate\\View\\Engines\\PhpEngine",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php",
            "line": 37,
            "function": "get",
            "class": "Illuminate\\View\\Engines\\CompilerEngine",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 139,
            "function": "get",
            "class": "Facade\\Ignition\\Views\\Engines\\CompilerEngine",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 122,
            "function": "getContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 91,
            "function": "renderContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Response.php",
            "line": 69,
            "function": "render",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Response.php",
            "line": 35,
            "function": "setContent",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 794,
            "function": "__construct",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 763,
            "function": "toResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 695,
            "function": "prepareResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/VerifyCsrfToken.php",
            "line": 78,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Middleware\/ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php",
            "line": 64,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Cookie\/Middleware\/AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Cookie\/Middleware\/EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 697,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 672,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 38,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Middleware\/TrustProxies.php",
            "line": 39,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Http\\Middleware\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 651,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 299,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 978,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 295,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 167,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETadmin-variant-edit--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-variant-edit--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-variant-edit--id-"></code></pre>
</div>
<div id="execution-error-GETadmin-variant-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-variant-edit--id-"></code></pre>
</div>
<form id="form-GETadmin-variant-edit--id-" data-method="GET" data-path="admin/variant/edit/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-variant-edit--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-variant-edit--id-" onclick="tryItOut('GETadmin-variant-edit--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-variant-edit--id-" onclick="cancelTryOut('GETadmin-variant-edit--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-variant-edit--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/variant/edit/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-variant-edit--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## admin/variant/edit/{id}




> Example request:

```bash
curl -X POST \
    "http://localhost/admin/variant/edit/cupiditate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/variant/edit/cupiditate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-variant-edit--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-variant-edit--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-variant-edit--id-"></code></pre>
</div>
<div id="execution-error-POSTadmin-variant-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-variant-edit--id-"></code></pre>
</div>
<form id="form-POSTadmin-variant-edit--id-" data-method="POST" data-path="admin/variant/edit/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-variant-edit--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-variant-edit--id-" onclick="tryItOut('POSTadmin-variant-edit--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-variant-edit--id-" onclick="cancelTryOut('POSTadmin-variant-edit--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-variant-edit--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/variant/edit/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTadmin-variant-edit--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## admin/variant/delete/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/variant/delete/facilis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/variant/delete/facilis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/admin/variant/edit/nemo'" />

        <title>Redirecting to http://localhost/admin/variant/edit/nemo</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/admin/variant/edit/nemo">http://localhost/admin/variant/edit/nemo</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-variant-delete--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-variant-delete--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-variant-delete--id-"></code></pre>
</div>
<div id="execution-error-GETadmin-variant-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-variant-delete--id-"></code></pre>
</div>
<form id="form-GETadmin-variant-delete--id-" data-method="GET" data-path="admin/variant/delete/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-variant-delete--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-variant-delete--id-" onclick="tryItOut('GETadmin-variant-delete--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-variant-delete--id-" onclick="cancelTryOut('GETadmin-variant-delete--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-variant-delete--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/variant/delete/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-variant-delete--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## admin/variant_value




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/variant_value" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/variant_value"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="http://localhost/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">SHOP CMS 1.0</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                User
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/user" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/user/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Category
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/category" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/category/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant Values
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant_value" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant_value/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Product
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/product" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/product/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div style="padding:20px">


                                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                        Xoá thất bại
                    </div>
                
                
                </div>
            </div>

        </div>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>Variant</th>
                        </tr>
                        </thead>
                        <tbody>
                                                    <tr>
                                <td>5</td>
                                <td>PU</td>
                                <td>
                                    <span class="badge badge-primary">
                                    Material
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/variant_value/edit/5">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')"
                                       href="http://localhost/admin/variant_value/delete/5">Xoá</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>4</td>
                                <td>Leather</td>
                                <td>
                                    <span class="badge badge-primary">
                                    Material
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/variant_value/edit/4">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')"
                                       href="http://localhost/admin/variant_value/delete/4">Xoá</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>3</td>
                                <td>Red</td>
                                <td>
                                    <span class="badge badge-primary">
                                    Color
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/variant_value/edit/3">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')"
                                       href="http://localhost/admin/variant_value/delete/3">Xoá</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>2</td>
                                <td>Black</td>
                                <td>
                                    <span class="badge badge-primary">
                                    Color
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/variant_value/edit/2">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')"
                                       href="http://localhost/admin/variant_value/delete/2">Xoá</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>1</td>
                                <td>Yellow</td>
                                <td>
                                    <span class="badge badge-primary">
                                    Color
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/variant_value/edit/1">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')"
                                       href="http://localhost/admin/variant_value/delete/1">Xoá</a>
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">

                    <div class="float-right">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="http://localhost/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://localhost/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>

```
<div id="execution-results-GETadmin-variant_value" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-variant_value"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-variant_value"></code></pre>
</div>
<div id="execution-error-GETadmin-variant_value" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-variant_value"></code></pre>
</div>
<form id="form-GETadmin-variant_value" data-method="GET" data-path="admin/variant_value" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-variant_value', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-variant_value" onclick="tryItOut('GETadmin-variant_value');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-variant_value" onclick="cancelTryOut('GETadmin-variant_value');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-variant_value" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/variant_value</code></b>
</p>
</form>


## admin/variant_value/add




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/variant_value/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/variant_value/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="http://localhost/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">SHOP CMS 1.0</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                User
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/user" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/user/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Category
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/category" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/category/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant Values
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant_value" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant_value/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Product
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/product" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/product/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div style="padding:20px">


                
                
                </div>
            </div>

        </div>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                        <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Add Variant Value</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="http://localhost/admin/variant_value/add">
                    <input type="hidden" name="_token" value="lfHaUmkeYzfpRYrU1LOeIMkvOB9HRssrpjj53j5o">                    <div class="card-body">
                        <div class="form-group">
                            <label for="">UserName</label>
                            <input type="text" name="name" class="form-control" placeholder="Name"
                                   value="">
                        </div>

                        <div class="form-group">
                            <label for="">Variant</label>
                            <select name="variant_id" class="form-control">
                                                                    <option value="1">Color</option>
                                                                    <option value="2">Material</option>
                                                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="http://localhost/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://localhost/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>

```
<div id="execution-results-GETadmin-variant_value-add" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-variant_value-add"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-variant_value-add"></code></pre>
</div>
<div id="execution-error-GETadmin-variant_value-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-variant_value-add"></code></pre>
</div>
<form id="form-GETadmin-variant_value-add" data-method="GET" data-path="admin/variant_value/add" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-variant_value-add', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-variant_value-add" onclick="tryItOut('GETadmin-variant_value-add');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-variant_value-add" onclick="cancelTryOut('GETadmin-variant_value-add');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-variant_value-add" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/variant_value/add</code></b>
</p>
</form>


## admin/variant_value/add




> Example request:

```bash
curl -X POST \
    "http://localhost/admin/variant_value/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/variant_value/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-variant_value-add" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-variant_value-add"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-variant_value-add"></code></pre>
</div>
<div id="execution-error-POSTadmin-variant_value-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-variant_value-add"></code></pre>
</div>
<form id="form-POSTadmin-variant_value-add" data-method="POST" data-path="admin/variant_value/add" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-variant_value-add', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-variant_value-add" onclick="tryItOut('POSTadmin-variant_value-add');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-variant_value-add" onclick="cancelTryOut('POSTadmin-variant_value-add');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-variant_value-add" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/variant_value/add</code></b>
</p>
</form>


## admin/variant_value/edit/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/variant_value/edit/cupiditate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/variant_value/edit/cupiditate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Trying to get property 'id' of non-object (View: \/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/resources\/views\/be\/variant_value\/edit.blade.php)",
    "exception": "Facade\\Ignition\\Exceptions\\ViewException",
    "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/resources\/views\/be\/variant_value\/edit.blade.php",
    "line": 12,
    "trace": [
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/resources\/views\/be\/variant_value\/edit.blade.php",
            "line": 12,
            "function": "handleError",
            "class": "Illuminate\\Foundation\\Bootstrap\\HandleExceptions",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
            "line": 107,
            "function": "require"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
            "line": 108,
            "function": "Illuminate\\Filesystem\\{closure}",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
            "line": 58,
            "function": "getRequire",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
            "line": 61,
            "function": "evaluatePath",
            "class": "Illuminate\\View\\Engines\\PhpEngine",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php",
            "line": 37,
            "function": "get",
            "class": "Illuminate\\View\\Engines\\CompilerEngine",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 139,
            "function": "get",
            "class": "Facade\\Ignition\\Views\\Engines\\CompilerEngine",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 122,
            "function": "getContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 91,
            "function": "renderContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Response.php",
            "line": 69,
            "function": "render",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Response.php",
            "line": 35,
            "function": "setContent",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 794,
            "function": "__construct",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 763,
            "function": "toResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 695,
            "function": "prepareResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/VerifyCsrfToken.php",
            "line": 78,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Middleware\/ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php",
            "line": 64,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Cookie\/Middleware\/AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Cookie\/Middleware\/EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 697,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 672,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 38,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Middleware\/TrustProxies.php",
            "line": 39,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Http\\Middleware\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 651,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 299,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 978,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 295,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 167,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETadmin-variant_value-edit--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-variant_value-edit--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-variant_value-edit--id-"></code></pre>
</div>
<div id="execution-error-GETadmin-variant_value-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-variant_value-edit--id-"></code></pre>
</div>
<form id="form-GETadmin-variant_value-edit--id-" data-method="GET" data-path="admin/variant_value/edit/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-variant_value-edit--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-variant_value-edit--id-" onclick="tryItOut('GETadmin-variant_value-edit--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-variant_value-edit--id-" onclick="cancelTryOut('GETadmin-variant_value-edit--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-variant_value-edit--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/variant_value/edit/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-variant_value-edit--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## admin/variant_value/edit/{id}




> Example request:

```bash
curl -X POST \
    "http://localhost/admin/variant_value/edit/ipsa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/variant_value/edit/ipsa"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-variant_value-edit--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-variant_value-edit--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-variant_value-edit--id-"></code></pre>
</div>
<div id="execution-error-POSTadmin-variant_value-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-variant_value-edit--id-"></code></pre>
</div>
<form id="form-POSTadmin-variant_value-edit--id-" data-method="POST" data-path="admin/variant_value/edit/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-variant_value-edit--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-variant_value-edit--id-" onclick="tryItOut('POSTadmin-variant_value-edit--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-variant_value-edit--id-" onclick="cancelTryOut('POSTadmin-variant_value-edit--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-variant_value-edit--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/variant_value/edit/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTadmin-variant_value-edit--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## admin/variant_value/delete/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/variant_value/delete/atque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/variant_value/delete/atque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/admin/variant_value/edit/cupiditate'" />

        <title>Redirecting to http://localhost/admin/variant_value/edit/cupiditate</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/admin/variant_value/edit/cupiditate">http://localhost/admin/variant_value/edit/cupiditate</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-variant_value-delete--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-variant_value-delete--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-variant_value-delete--id-"></code></pre>
</div>
<div id="execution-error-GETadmin-variant_value-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-variant_value-delete--id-"></code></pre>
</div>
<form id="form-GETadmin-variant_value-delete--id-" data-method="GET" data-path="admin/variant_value/delete/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-variant_value-delete--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-variant_value-delete--id-" onclick="tryItOut('GETadmin-variant_value-delete--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-variant_value-delete--id-" onclick="cancelTryOut('GETadmin-variant_value-delete--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-variant_value-delete--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/variant_value/delete/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-variant_value-delete--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## admin/product




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="http://localhost/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">SHOP CMS 1.0</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                User
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/user" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/user/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Category
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/category" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/category/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant Values
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant_value" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant_value/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Product
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/product" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/product/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div style="padding:20px">


                                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                        Xoá thất bại
                    </div>
                
                
                </div>
            </div>

        </div>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                        <form method="GET" action="http://localhost/admin/product/search">
        <input type="text" name="q"/>
        <button>Tìm kiếm</button>
    </form>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Quantity</th>
                        </tr>
                        </thead>
                        <tbody>
                                                    <tr>
                                <td>2</td>
                                <td>
                                                                            <img width="100px" src="http://localhost/storage/products/16320604180air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg" alt="Nike Jordan 1"/>
                                                                        </td>
                                <td>
                                    Nike Jordan 1
                                </td>
                                <td>

                                                                            <span class="badge badge-primary">Giày</span>
                                    
                                                                    </td>
                                <td>
                                    20
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/product/edit/2">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/product/delete/2">Xoá</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/product/delete/2">Chi tiết sản phẩm</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>3</td>
                                <td>
                                                                            <img width="100px" src="http://localhost/storage/products/16320604730defy-all-day-training-shoe-LtD2G1.jpeg" alt="Nike Jordan 2"/>
                                                                        </td>
                                <td>
                                    Nike Jordan 2
                                </td>
                                <td>

                                                                            <span class="badge badge-primary">Giày Adidas</span>
                                    
                                                                    </td>
                                <td>
                                    20
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/product/edit/3">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/product/delete/3">Xoá</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/product/delete/3">Chi tiết sản phẩm</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>4</td>
                                <td>
                                                                            <img width="100px" src="http://localhost/storage/products/16320606080air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg" alt="Nike Jordan 3"/>
                                                                        </td>
                                <td>
                                    Nike Jordan 3
                                </td>
                                <td>

                                                                            <span class="badge badge-primary">Giày Rebook</span>
                                    
                                                                    </td>
                                <td>
                                    100
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/product/edit/4">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/product/delete/4">Xoá</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/product/delete/4">Chi tiết sản phẩm</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>1</td>
                                <td>
                                                                            <img width="100px" src="http://localhost/storage/products/164923446804f37fca8-6bce-43e7-ad07-f57ae3c13142 (1).png" alt="NMD 2"/>
                                                                        </td>
                                <td>
                                    NMD 2
                                </td>
                                <td>

                                                                            <span class="badge badge-primary">Giày</span>
                                    
                                                                    </td>
                                <td>
                                    12
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/product/edit/1">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/product/delete/1">Xoá</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/product/delete/1">Chi tiết sản phẩm</a>
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">

                    <div class="float-right">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="http://localhost/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://localhost/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>

```
<div id="execution-results-GETadmin-product" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-product"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-product"></code></pre>
</div>
<div id="execution-error-GETadmin-product" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-product"></code></pre>
</div>
<form id="form-GETadmin-product" data-method="GET" data-path="admin/product" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-product', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-product" onclick="tryItOut('GETadmin-product');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-product" onclick="cancelTryOut('GETadmin-product');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-product" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/product</code></b>
</p>
</form>


## admin/product/search




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/product/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="http://localhost/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">SHOP CMS 1.0</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                User
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/user" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/user/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Category
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/category" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/category/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant Values
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant_value" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant_value/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Product
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/product" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/product/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div style="padding:20px">


                
                
                </div>
            </div>

        </div>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                        <form method="GET" action="http://localhost/admin/product/search">
        <input type="text" name="q"/>
        <button>Tìm kiếm</button>
    </form>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Quantity</th>
                        </tr>
                        </thead>
                        <tbody>
                                                    <tr>
                                <td>2</td>
                                <td>
                                                                            <img width="100px" src="http://localhost/storage/products/16320604180air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg" alt="Nike Jordan 1"/>
                                                                        </td>
                                <td>
                                    Nike Jordan 1
                                </td>
                                <td>

                                                                            <span class="badge badge-primary">Giày</span>
                                    
                                                                    </td>
                                <td>
                                    20
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/product/edit/2">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/product/delete/2">Xoá</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/product/delete/2">Chi tiết sản phẩm</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>3</td>
                                <td>
                                                                            <img width="100px" src="http://localhost/storage/products/16320604730defy-all-day-training-shoe-LtD2G1.jpeg" alt="Nike Jordan 2"/>
                                                                        </td>
                                <td>
                                    Nike Jordan 2
                                </td>
                                <td>

                                                                            <span class="badge badge-primary">Giày Adidas</span>
                                    
                                                                    </td>
                                <td>
                                    20
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/product/edit/3">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/product/delete/3">Xoá</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/product/delete/3">Chi tiết sản phẩm</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>4</td>
                                <td>
                                                                            <img width="100px" src="http://localhost/storage/products/16320606080air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg" alt="Nike Jordan 3"/>
                                                                        </td>
                                <td>
                                    Nike Jordan 3
                                </td>
                                <td>

                                                                            <span class="badge badge-primary">Giày Rebook</span>
                                    
                                                                    </td>
                                <td>
                                    100
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/product/edit/4">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/product/delete/4">Xoá</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/product/delete/4">Chi tiết sản phẩm</a>
                                </td>
                            </tr>
                                                    <tr>
                                <td>1</td>
                                <td>
                                                                            <img width="100px" src="http://localhost/storage/products/164923446804f37fca8-6bce-43e7-ad07-f57ae3c13142 (1).png" alt="NMD 2"/>
                                                                        </td>
                                <td>
                                    NMD 2
                                </td>
                                <td>

                                                                            <span class="badge badge-primary">Giày</span>
                                    
                                                                    </td>
                                <td>
                                    12
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="http://localhost/admin/product/edit/1">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/product/delete/1">Xoá</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="http://localhost/admin/product/delete/1">Chi tiết sản phẩm</a>
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">

                    <div class="float-right">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="http://localhost/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://localhost/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>

```
<div id="execution-results-GETadmin-product-search" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-product-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-product-search"></code></pre>
</div>
<div id="execution-error-GETadmin-product-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-product-search"></code></pre>
</div>
<form id="form-GETadmin-product-search" data-method="GET" data-path="admin/product/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-product-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-product-search" onclick="tryItOut('GETadmin-product-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-product-search" onclick="cancelTryOut('GETadmin-product-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-product-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/product/search</code></b>
</p>
</form>


## admin/product/add




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/product/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="http://localhost/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">SHOP CMS 1.0</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                User
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/user" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/user/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Category
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/category" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/category/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Variant Values
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/variant_value" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/variant_value/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="" class="nav-link active">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Product
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a  href="http://localhost/admin/product" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/admin/product/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div style="padding:20px">


                
                
                </div>
            </div>

        </div>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                        <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Add Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" enctype="multipart/form-data" action="http://localhost/admin/product/add">
                    <input type="hidden" name="_token" value="lfHaUmkeYzfpRYrU1LOeIMkvOB9HRssrpjj53j5o">                    <div class="card-body">

                        <div class="preview" style="display:flex;">

                        </div>
                        <br>
                        <input type="file" name="img[]" class="img-select" multiple
                               accept="image/png, image/gif, image/jpeg" onchange="previewImages()">

                        <br>
                        <br>

                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name"
                                   value="">
                        </div>

                        <div class="form-group">
                            <label for="">Quantity</label>
                            <input type="number" name="quantity" class="form-control" placeholder="Quantity"
                                   value="">
                        </div>

                        <div class="form-group">
                            <label for="">Short Desc</label>
                            <textarea name="short_desc" class="form-control" placeholder="Short Desc"
                            ></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Tag Line</label>
                            <textarea name="tag_line" class="form-control" placeholder="Tag Line"
                            ></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Content</label>
                            <textarea name="content" class="form-control" placeholder="Content"
                            ></textarea>
                        </div>


                        <div class="form-group">
                            <label for="">Seo Keyword</label>
                            <textarea name="seo_keyword" class="form-control" placeholder="Seo Keyword"
                            ></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Seo Description</label>
                            <textarea name="seo_description" class="form-control" placeholder="Seo Decsription"
                            ></textarea>
                        </div>


                        <div class="form-group">
                            <label for="">Category</label>
                            <select name="category_id" class="form-control">
                                                                    <option value="1">Giày</option>
                                                                    <option value="2">Giày Adidas</option>
                                                                    <option value="3">Giày Rebook</option>
                                                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Discount</label>
                            <select name="discount_id" class="form-control">
                                                                    <option value="1">100</option>
                                                            </select>
                        </div>

                        <div class="form-group">
                                                                                            <label>Color</label>
                                                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="variants[]"
                                               value="1|Color|1">
                                        <label class="form-check-label"
                                               for="exampleCheck1">Yellow</label>
                                    </div>
                                                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="variants[]"
                                               value="1|Color|2">
                                        <label class="form-check-label"
                                               for="exampleCheck1">Black</label>
                                    </div>
                                                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="variants[]"
                                               value="1|Color|3">
                                        <label class="form-check-label"
                                               for="exampleCheck1">Red</label>
                                    </div>
                                                                                                                                                            <label>Material</label>
                                                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="variants[]"
                                               value="2|Material|4">
                                        <label class="form-check-label"
                                               for="exampleCheck1">Leather</label>
                                    </div>
                                                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="variants[]"
                                               value="2|Material|5">
                                        <label class="form-check-label"
                                               for="exampleCheck1">PU</label>
                                    </div>
                                                                                                                    </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        async function previewImages() {

            for (let i = 0; i < document.querySelector('.img-select').files.length; i++) {
                const reader = new FileReader();
                await reader.readAsDataURL(document.querySelector('.img-select').files[i]);

                reader.onload = function (file) {
                    const preview = document.querySelector('.preview');
                    const img = document.createElement('img');
                    img.setAttribute('src', file.target.result);
                    img.classList.add('thumb');
                    preview.appendChild(img);
                }
            }
        }

        CKEDITOR.replace('content');
    </script>

    <style>
        .thumb {
            width: 100px;
            height: 80px;
            object-font: cover;
        }
    </style>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="http://localhost/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://localhost/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>

```
<div id="execution-results-GETadmin-product-add" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-product-add"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-product-add"></code></pre>
</div>
<div id="execution-error-GETadmin-product-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-product-add"></code></pre>
</div>
<form id="form-GETadmin-product-add" data-method="GET" data-path="admin/product/add" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-product-add', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-product-add" onclick="tryItOut('GETadmin-product-add');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-product-add" onclick="cancelTryOut('GETadmin-product-add');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-product-add" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/product/add</code></b>
</p>
</form>


## admin/product/add




> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-product-add" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-product-add"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-product-add"></code></pre>
</div>
<div id="execution-error-POSTadmin-product-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-product-add"></code></pre>
</div>
<form id="form-POSTadmin-product-add" data-method="POST" data-path="admin/product/add" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-product-add', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-product-add" onclick="tryItOut('POSTadmin-product-add');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-product-add" onclick="cancelTryOut('POSTadmin-product-add');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-product-add" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/product/add</code></b>
</p>
</form>


## admin/product/edit/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/product/edit/culpa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/edit/culpa"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Trying to get property 'id' of non-object (View: \/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/resources\/views\/be\/product\/edit.blade.php)",
    "exception": "Facade\\Ignition\\Exceptions\\ViewException",
    "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/resources\/views\/be\/product\/edit.blade.php",
    "line": 13,
    "trace": [
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/resources\/views\/be\/product\/edit.blade.php",
            "line": 13,
            "function": "handleError",
            "class": "Illuminate\\Foundation\\Bootstrap\\HandleExceptions",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
            "line": 107,
            "function": "require"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
            "line": 108,
            "function": "Illuminate\\Filesystem\\{closure}",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/PhpEngine.php",
            "line": 58,
            "function": "getRequire",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Engines\/CompilerEngine.php",
            "line": 61,
            "function": "evaluatePath",
            "class": "Illuminate\\View\\Engines\\PhpEngine",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/facade\/ignition\/src\/Views\/Engines\/CompilerEngine.php",
            "line": 37,
            "function": "get",
            "class": "Illuminate\\View\\Engines\\CompilerEngine",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 139,
            "function": "get",
            "class": "Facade\\Ignition\\Views\\Engines\\CompilerEngine",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 122,
            "function": "getContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/View.php",
            "line": 91,
            "function": "renderContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Response.php",
            "line": 69,
            "function": "render",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Response.php",
            "line": 35,
            "function": "setContent",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 794,
            "function": "__construct",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 763,
            "function": "toResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 695,
            "function": "prepareResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/VerifyCsrfToken.php",
            "line": 78,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Middleware\/ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php",
            "line": 64,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Cookie\/Middleware\/AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Cookie\/Middleware\/EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 697,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 672,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 38,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Middleware\/TrustProxies.php",
            "line": 39,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Http\\Middleware\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 651,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 299,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 978,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 295,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 167,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETadmin-product-edit--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-product-edit--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-product-edit--id-"></code></pre>
</div>
<div id="execution-error-GETadmin-product-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-product-edit--id-"></code></pre>
</div>
<form id="form-GETadmin-product-edit--id-" data-method="GET" data-path="admin/product/edit/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-product-edit--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-product-edit--id-" onclick="tryItOut('GETadmin-product-edit--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-product-edit--id-" onclick="cancelTryOut('GETadmin-product-edit--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-product-edit--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/product/edit/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-product-edit--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## admin/product/edit/{id}




> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product/edit/ipsum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/edit/ipsum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-product-edit--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-product-edit--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-product-edit--id-"></code></pre>
</div>
<div id="execution-error-POSTadmin-product-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-product-edit--id-"></code></pre>
</div>
<form id="form-POSTadmin-product-edit--id-" data-method="POST" data-path="admin/product/edit/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-product-edit--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-product-edit--id-" onclick="tryItOut('POSTadmin-product-edit--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-product-edit--id-" onclick="cancelTryOut('POSTadmin-product-edit--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-product-edit--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/product/edit/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTadmin-product-edit--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## admin/product/delete/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/product/delete/consectetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/delete/consectetur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETadmin-product-delete--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-product-delete--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-product-delete--id-"></code></pre>
</div>
<div id="execution-error-GETadmin-product-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-product-delete--id-"></code></pre>
</div>
<form id="form-GETadmin-product-delete--id-" data-method="GET" data-path="admin/product/delete/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-product-delete--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-product-delete--id-" onclick="tryItOut('GETadmin-product-delete--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-product-delete--id-" onclick="cancelTryOut('GETadmin-product-delete--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-product-delete--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/product/delete/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-product-delete--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## /




> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"  content="Website sell shoes, hyperbeast ....">
    <meta name="keywords" content="shoes,nike,adidas,puma,rebook....">
    <title>
        Home Page    </title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!--AXIOS GỌI API-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
<nav class="flex justify-between items-center shadow p-5">
    <div>
        <img src="https://thumbs.dreamstime.com/b/web-183282388.jpg" alt="logo" class="w-12">
    </div>

    <div class="flex space-x-2 uppercase font-semibold items-center">
        <div><a href="">Home</a></div>
        <div><a href="">Danh mục</a></div>
        <div><a href="">Đăng ký</a></div>
        <div><a href="">Đăng nhập</a></div>

        <div class="relative">
            <div>
                <i class="bi bi-cart2 text-3xl"></i>
            </div>

            <div class="bg-red-400 text-white -top-2 -right-2 absolute rounded-full text-sm w-6 h-6 flex items-center justify-center cart-item-counter">0</div>
        </div>
    </div>
</nav>
<div class="container mx-auto md:px-0 px-5">
        <!--sp chính-->
    <div class="space-y-10 mt-5">
        <section>
            <h4 class="text-2xl font-bold">Sản phẩm mới nhất</h4>


            <div class="grid grid-cols-1 md:grid-cols-4 md:space-x-6 space-y-6 md:space-y-0 mt-5">
                                <!--CARD-->
    <a href="http://localhost/product/detail/4" class="bg-white shadow pb-2 col-span-1" >
    <div>

                    <img
                src="http://localhost/storage/products/16320606080air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg"
                class="z-10 w-full h-72 object-cover">
        

        <div class="space-y-4 mt-5 px-4">
            <div class="flex justify-between"><h4 class="uppercase font-extrabold text-xl text-left">
                    Nike Jordan 3 </h4>
                <button><i class="bi bi-heart text-xl"></i></button>
            </div>
            <p class="font-bold text-2xl text-red-500 text-left">
                <span> 100 </span>
                
            </p>
        </div>
        <div class="flex w-full mt-5 items-center justify-between px-2">
            <div class="flex space-x-2 font-bold"><span class="bi bi-plus cursor-pointer"></span><input
                    type="text" readonly="" class="border rounded w-12 text-center font-medium"
                    value="1"><span class="bi bi-dash cursor-pointer"></span></div>
            <div class="flex justify-between space-x-2">
                <button
                    class="flex-grow-1 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    Add to Cart
                </button>
                <button
                    class="flex-grow-1 px-4 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    <i class="bi bi-share"></i></button>
            </div>
        </div>
    </div>
    <!--END CARD-->
    </a>
                                <!--CARD-->
    <a href="http://localhost/product/detail/3" class="bg-white shadow pb-2 col-span-1" >
    <div>

                    <img
                src="http://localhost/storage/products/16320604730defy-all-day-training-shoe-LtD2G1.jpeg"
                class="z-10 w-full h-72 object-cover">
        

        <div class="space-y-4 mt-5 px-4">
            <div class="flex justify-between"><h4 class="uppercase font-extrabold text-xl text-left">
                    Nike Jordan 2 </h4>
                <button><i class="bi bi-heart text-xl"></i></button>
            </div>
            <p class="font-bold text-2xl text-red-500 text-left">
                <span> 100 </span>
                
            </p>
        </div>
        <div class="flex w-full mt-5 items-center justify-between px-2">
            <div class="flex space-x-2 font-bold"><span class="bi bi-plus cursor-pointer"></span><input
                    type="text" readonly="" class="border rounded w-12 text-center font-medium"
                    value="1"><span class="bi bi-dash cursor-pointer"></span></div>
            <div class="flex justify-between space-x-2">
                <button
                    class="flex-grow-1 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    Add to Cart
                </button>
                <button
                    class="flex-grow-1 px-4 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    <i class="bi bi-share"></i></button>
            </div>
        </div>
    </div>
    <!--END CARD-->
    </a>
                                <!--CARD-->
    <a href="http://localhost/product/detail/2" class="bg-white shadow pb-2 col-span-1" >
    <div>

                    <img
                src="http://localhost/storage/products/16320604180air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg"
                class="z-10 w-full h-72 object-cover">
        

        <div class="space-y-4 mt-5 px-4">
            <div class="flex justify-between"><h4 class="uppercase font-extrabold text-xl text-left">
                    Nike Jordan 1 </h4>
                <button><i class="bi bi-heart text-xl"></i></button>
            </div>
            <p class="font-bold text-2xl text-red-500 text-left">
                <span> 100 </span>
                
            </p>
        </div>
        <div class="flex w-full mt-5 items-center justify-between px-2">
            <div class="flex space-x-2 font-bold"><span class="bi bi-plus cursor-pointer"></span><input
                    type="text" readonly="" class="border rounded w-12 text-center font-medium"
                    value="1"><span class="bi bi-dash cursor-pointer"></span></div>
            <div class="flex justify-between space-x-2">
                <button
                    class="flex-grow-1 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    Add to Cart
                </button>
                <button
                    class="flex-grow-1 px-4 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    <i class="bi bi-share"></i></button>
            </div>
        </div>
    </div>
    <!--END CARD-->
    </a>
                                <!--CARD-->
    <a href="http://localhost/product/detail/1" class="bg-white shadow pb-2 col-span-1" >
    <div>

                    <img
                src="http://localhost/storage/products/164923446804f37fca8-6bce-43e7-ad07-f57ae3c13142 (1).png"
                class="z-10 w-full h-72 object-cover">
        

        <div class="space-y-4 mt-5 px-4">
            <div class="flex justify-between"><h4 class="uppercase font-extrabold text-xl text-left">
                    NMD 2 </h4>
                <button><i class="bi bi-heart text-xl"></i></button>
            </div>
            <p class="font-bold text-2xl text-red-500 text-left">
                <span> 100 </span>
                
            </p>
        </div>
        <div class="flex w-full mt-5 items-center justify-between px-2">
            <div class="flex space-x-2 font-bold"><span class="bi bi-plus cursor-pointer"></span><input
                    type="text" readonly="" class="border rounded w-12 text-center font-medium"
                    value="1"><span class="bi bi-dash cursor-pointer"></span></div>
            <div class="flex justify-between space-x-2">
                <button
                    class="flex-grow-1 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    Add to Cart
                </button>
                <button
                    class="flex-grow-1 px-4 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    <i class="bi bi-share"></i></button>
            </div>
        </div>
    </div>
    <!--END CARD-->
    </a>
                            </div>
        </section>

        <section>
            <h4 class="text-2xl font-bold">
                Sản phẩm nhiều lượt xem nhất
            </h4>
            <div class="grid grid-cols-1 md:grid-cols-4 md:space-x-6 space-y-6 md:space-y-0 mt-5">
                                    <!--CARD-->
    <a href="http://localhost/product/detail/4" class="bg-white shadow pb-2 col-span-1" >
    <div>

                    <img
                src="http://localhost/storage/products/16320606080air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg"
                class="z-10 w-full h-72 object-cover">
        

        <div class="space-y-4 mt-5 px-4">
            <div class="flex justify-between"><h4 class="uppercase font-extrabold text-xl text-left">
                    Nike Jordan 3 </h4>
                <button><i class="bi bi-heart text-xl"></i></button>
            </div>
            <p class="font-bold text-2xl text-red-500 text-left">
                <span> 100 </span>
                
            </p>
        </div>
        <div class="flex w-full mt-5 items-center justify-between px-2">
            <div class="flex space-x-2 font-bold"><span class="bi bi-plus cursor-pointer"></span><input
                    type="text" readonly="" class="border rounded w-12 text-center font-medium"
                    value="1"><span class="bi bi-dash cursor-pointer"></span></div>
            <div class="flex justify-between space-x-2">
                <button
                    class="flex-grow-1 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    Add to Cart
                </button>
                <button
                    class="flex-grow-1 px-4 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    <i class="bi bi-share"></i></button>
            </div>
        </div>
    </div>
    <!--END CARD-->
    </a>
                                    <!--CARD-->
    <a href="http://localhost/product/detail/3" class="bg-white shadow pb-2 col-span-1" >
    <div>

                    <img
                src="http://localhost/storage/products/16320604730defy-all-day-training-shoe-LtD2G1.jpeg"
                class="z-10 w-full h-72 object-cover">
        

        <div class="space-y-4 mt-5 px-4">
            <div class="flex justify-between"><h4 class="uppercase font-extrabold text-xl text-left">
                    Nike Jordan 2 </h4>
                <button><i class="bi bi-heart text-xl"></i></button>
            </div>
            <p class="font-bold text-2xl text-red-500 text-left">
                <span> 100 </span>
                
            </p>
        </div>
        <div class="flex w-full mt-5 items-center justify-between px-2">
            <div class="flex space-x-2 font-bold"><span class="bi bi-plus cursor-pointer"></span><input
                    type="text" readonly="" class="border rounded w-12 text-center font-medium"
                    value="1"><span class="bi bi-dash cursor-pointer"></span></div>
            <div class="flex justify-between space-x-2">
                <button
                    class="flex-grow-1 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    Add to Cart
                </button>
                <button
                    class="flex-grow-1 px-4 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    <i class="bi bi-share"></i></button>
            </div>
        </div>
    </div>
    <!--END CARD-->
    </a>
                                    <!--CARD-->
    <a href="http://localhost/product/detail/2" class="bg-white shadow pb-2 col-span-1" >
    <div>

                    <img
                src="http://localhost/storage/products/16320604180air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg"
                class="z-10 w-full h-72 object-cover">
        

        <div class="space-y-4 mt-5 px-4">
            <div class="flex justify-between"><h4 class="uppercase font-extrabold text-xl text-left">
                    Nike Jordan 1 </h4>
                <button><i class="bi bi-heart text-xl"></i></button>
            </div>
            <p class="font-bold text-2xl text-red-500 text-left">
                <span> 100 </span>
                
            </p>
        </div>
        <div class="flex w-full mt-5 items-center justify-between px-2">
            <div class="flex space-x-2 font-bold"><span class="bi bi-plus cursor-pointer"></span><input
                    type="text" readonly="" class="border rounded w-12 text-center font-medium"
                    value="1"><span class="bi bi-dash cursor-pointer"></span></div>
            <div class="flex justify-between space-x-2">
                <button
                    class="flex-grow-1 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    Add to Cart
                </button>
                <button
                    class="flex-grow-1 px-4 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    <i class="bi bi-share"></i></button>
            </div>
        </div>
    </div>
    <!--END CARD-->
    </a>
                                    <!--CARD-->
    <a href="http://localhost/product/detail/1" class="bg-white shadow pb-2 col-span-1" >
    <div>

                    <img
                src="http://localhost/storage/products/164923446804f37fca8-6bce-43e7-ad07-f57ae3c13142 (1).png"
                class="z-10 w-full h-72 object-cover">
        

        <div class="space-y-4 mt-5 px-4">
            <div class="flex justify-between"><h4 class="uppercase font-extrabold text-xl text-left">
                    NMD 2 </h4>
                <button><i class="bi bi-heart text-xl"></i></button>
            </div>
            <p class="font-bold text-2xl text-red-500 text-left">
                <span> 100 </span>
                
            </p>
        </div>
        <div class="flex w-full mt-5 items-center justify-between px-2">
            <div class="flex space-x-2 font-bold"><span class="bi bi-plus cursor-pointer"></span><input
                    type="text" readonly="" class="border rounded w-12 text-center font-medium"
                    value="1"><span class="bi bi-dash cursor-pointer"></span></div>
            <div class="flex justify-between space-x-2">
                <button
                    class="flex-grow-1 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    Add to Cart
                </button>
                <button
                    class="flex-grow-1 px-4 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    <i class="bi bi-share"></i></button>
            </div>
        </div>
    </div>
    <!--END CARD-->
    </a>
                            </div>
        </section>

        <section>
            <h4 class="text-2xl font-bold">
                Sản phẩm nhiều người mua
            </h4>
            <div class="grid grid-cols-1 md:grid-cols-4 md:space-x-6 space-y-6 md:space-y-0 mt-5">
                                    <!--CARD-->
    <a href="http://localhost/product/detail/4" class="bg-white shadow pb-2 col-span-1" >
    <div>

                    <img
                src="http://localhost/storage/products/16320606080air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg"
                class="z-10 w-full h-72 object-cover">
        

        <div class="space-y-4 mt-5 px-4">
            <div class="flex justify-between"><h4 class="uppercase font-extrabold text-xl text-left">
                    Nike Jordan 3 </h4>
                <button><i class="bi bi-heart text-xl"></i></button>
            </div>
            <p class="font-bold text-2xl text-red-500 text-left">
                <span> 100 </span>
                
            </p>
        </div>
        <div class="flex w-full mt-5 items-center justify-between px-2">
            <div class="flex space-x-2 font-bold"><span class="bi bi-plus cursor-pointer"></span><input
                    type="text" readonly="" class="border rounded w-12 text-center font-medium"
                    value="1"><span class="bi bi-dash cursor-pointer"></span></div>
            <div class="flex justify-between space-x-2">
                <button
                    class="flex-grow-1 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    Add to Cart
                </button>
                <button
                    class="flex-grow-1 px-4 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    <i class="bi bi-share"></i></button>
            </div>
        </div>
    </div>
    <!--END CARD-->
    </a>
                                    <!--CARD-->
    <a href="http://localhost/product/detail/3" class="bg-white shadow pb-2 col-span-1" >
    <div>

                    <img
                src="http://localhost/storage/products/16320604730defy-all-day-training-shoe-LtD2G1.jpeg"
                class="z-10 w-full h-72 object-cover">
        

        <div class="space-y-4 mt-5 px-4">
            <div class="flex justify-between"><h4 class="uppercase font-extrabold text-xl text-left">
                    Nike Jordan 2 </h4>
                <button><i class="bi bi-heart text-xl"></i></button>
            </div>
            <p class="font-bold text-2xl text-red-500 text-left">
                <span> 100 </span>
                
            </p>
        </div>
        <div class="flex w-full mt-5 items-center justify-between px-2">
            <div class="flex space-x-2 font-bold"><span class="bi bi-plus cursor-pointer"></span><input
                    type="text" readonly="" class="border rounded w-12 text-center font-medium"
                    value="1"><span class="bi bi-dash cursor-pointer"></span></div>
            <div class="flex justify-between space-x-2">
                <button
                    class="flex-grow-1 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    Add to Cart
                </button>
                <button
                    class="flex-grow-1 px-4 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    <i class="bi bi-share"></i></button>
            </div>
        </div>
    </div>
    <!--END CARD-->
    </a>
                                    <!--CARD-->
    <a href="http://localhost/product/detail/2" class="bg-white shadow pb-2 col-span-1" >
    <div>

                    <img
                src="http://localhost/storage/products/16320604180air-zoom-pegasus-38-running-shoe-1FV5gr.jpeg"
                class="z-10 w-full h-72 object-cover">
        

        <div class="space-y-4 mt-5 px-4">
            <div class="flex justify-between"><h4 class="uppercase font-extrabold text-xl text-left">
                    Nike Jordan 1 </h4>
                <button><i class="bi bi-heart text-xl"></i></button>
            </div>
            <p class="font-bold text-2xl text-red-500 text-left">
                <span> 100 </span>
                
            </p>
        </div>
        <div class="flex w-full mt-5 items-center justify-between px-2">
            <div class="flex space-x-2 font-bold"><span class="bi bi-plus cursor-pointer"></span><input
                    type="text" readonly="" class="border rounded w-12 text-center font-medium"
                    value="1"><span class="bi bi-dash cursor-pointer"></span></div>
            <div class="flex justify-between space-x-2">
                <button
                    class="flex-grow-1 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    Add to Cart
                </button>
                <button
                    class="flex-grow-1 px-4 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    <i class="bi bi-share"></i></button>
            </div>
        </div>
    </div>
    <!--END CARD-->
    </a>
                                    <!--CARD-->
    <a href="http://localhost/product/detail/1" class="bg-white shadow pb-2 col-span-1" >
    <div>

                    <img
                src="http://localhost/storage/products/164923446804f37fca8-6bce-43e7-ad07-f57ae3c13142 (1).png"
                class="z-10 w-full h-72 object-cover">
        

        <div class="space-y-4 mt-5 px-4">
            <div class="flex justify-between"><h4 class="uppercase font-extrabold text-xl text-left">
                    NMD 2 </h4>
                <button><i class="bi bi-heart text-xl"></i></button>
            </div>
            <p class="font-bold text-2xl text-red-500 text-left">
                <span> 100 </span>
                
            </p>
        </div>
        <div class="flex w-full mt-5 items-center justify-between px-2">
            <div class="flex space-x-2 font-bold"><span class="bi bi-plus cursor-pointer"></span><input
                    type="text" readonly="" class="border rounded w-12 text-center font-medium"
                    value="1"><span class="bi bi-dash cursor-pointer"></span></div>
            <div class="flex justify-between space-x-2">
                <button
                    class="flex-grow-1 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    Add to Cart
                </button>
                <button
                    class="flex-grow-1 px-4 cursor-pointer block flex items-center justify-center bg-gray-800 p-3 text-white font-bold">
                    <i class="bi bi-share"></i></button>
            </div>
        </div>
    </div>
    <!--END CARD-->
    </a>
                            </div>
        </section>
    </div>
</div>

<footer class="flex md:flex-row flex-col justify-around mt-20 bg-gray-200 py-5">
    <div>
        <img src="https://thumbs.dreamstime.com/b/web-183282388.jpg" alt="logo" class="w-12">
        <p class="font-bold mt-5">Công ty TNHH 1 thành viên Luân</p>
        <address class="font-bold">Địa chỉ: Hạ Long - Quảng Ninh</address>
        <tel><span class="font-bold">SDT: 0868120192</span></tel>
        <p><span class="font-bold">Fax: 0868120192</span></p>
    </div>

    <div>
        <ul class="mt-10 space-y-2">
            <li>
                <a href="">Về chúng tôi</a>
            </li>

            <li>
                <a href="">Chính sách mua hàng</a>
            </li>

            <li>
                <a href="">Chính sách trả hàng</a>
            </li>
        </ul>
    </div>

    <div>
        <h5 class="mt-10 font-semibold">Mạng xã hội</h5>
        <div class="flex space-x-5 ">
            <a href="https://facebook.com">
                <i class="bi bi-facebook text-sm"></i>
            </a>
            <a href="https://facebook.com">
                <i class="bi bi-google text-sm"></i>
            </a>
            <a href="https://facebook.com">
                <i class="bi bi-instagram text-sm"></i>
            </a>
        </div>
    </div>
</footer>

<script type="text/javascript">
    axios({
        method: 'get',
        url: `http://localhost/api/cart/items`
    }).then((resp) => {
        const cart = resp.data.cart;
        document.querySelector('.cart-item-counter').innerHTML = cart.length;
    }).catch((error) => {
    });
</script>
</body>
</html>

```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>


## product/detail/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/product/detail/dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/product/detail/dolorem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Trying to get property 'views' of non-object",
    "exception": "ErrorException",
    "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/app\/Http\/Controllers\/ProductController.php",
    "line": 20,
    "trace": [
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/app\/Http\/Controllers\/ProductController.php",
            "line": 20,
            "function": "handleError",
            "class": "Illuminate\\Foundation\\Bootstrap\\HandleExceptions",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "detail",
            "class": "App\\Http\\Controllers\\ProductController",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 261,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 204,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 695,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/VerifyCsrfToken.php",
            "line": 78,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Middleware\/ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php",
            "line": 64,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Cookie\/Middleware\/AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Cookie\/Middleware\/EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 697,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 672,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 38,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Middleware\/TrustProxies.php",
            "line": 39,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Http\\Middleware\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 651,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 299,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 978,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 295,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/symfony\/console\/Application.php",
            "line": 167,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Users\/lrandom\/Desktop\/laravel\/shop_b2c\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETproduct-detail--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETproduct-detail--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETproduct-detail--id-"></code></pre>
</div>
<div id="execution-error-GETproduct-detail--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETproduct-detail--id-"></code></pre>
</div>
<form id="form-GETproduct-detail--id-" data-method="GET" data-path="product/detail/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETproduct-detail--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETproduct-detail--id-" onclick="tryItOut('GETproduct-detail--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETproduct-detail--id-" onclick="cancelTryOut('GETproduct-detail--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETproduct-detail--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>product/detail/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETproduct-detail--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## category/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/category/quam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/category/quam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"  content="    ">
    <meta name="keywords" content="    ">
    <title>
        Home Page    </title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!--AXIOS GỌI API-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
<nav class="flex justify-between items-center shadow p-5">
    <div>
        <img src="https://thumbs.dreamstime.com/b/web-183282388.jpg" alt="logo" class="w-12">
    </div>

    <div class="flex space-x-2 uppercase font-semibold items-center">
        <div><a href="">Home</a></div>
        <div><a href="">Danh mục</a></div>
        <div><a href="">Đăng ký</a></div>
        <div><a href="">Đăng nhập</a></div>

        <div class="relative">
            <div>
                <i class="bi bi-cart2 text-3xl"></i>
            </div>

            <div class="bg-red-400 text-white -top-2 -right-2 absolute rounded-full text-sm w-6 h-6 flex items-center justify-center cart-item-counter">0</div>
        </div>
    </div>
</nav>
<div class="container mx-auto md:px-0 px-5">
        <div class="grid grid-cols-10 mt-10">
        <div class="col-span-3">
            <ul class="font-semibold">
                <li>
                <li>
                    <a href="http://localhost/category/-1">All</a>
                </li>
                </li>
                                    <li>
                        <a href="http://localhost/category/1">Giày</a>
                    </li>
                                    <li>
                        <a href="http://localhost/category/2">Giày Adidas</a>
                    </li>
                                    <li>
                        <a href="http://localhost/category/3">Giày Rebook</a>
                    </li>
                            </ul>
        </div>

        <div class="col-span-7">
            <h4 class="font-bold text-2xl">
                                    All
                            </h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-5">
                            </div>
        </div>
    </div>
</div>

<footer class="flex md:flex-row flex-col justify-around mt-20 bg-gray-200 py-5">
    <div>
        <img src="https://thumbs.dreamstime.com/b/web-183282388.jpg" alt="logo" class="w-12">
        <p class="font-bold mt-5">Công ty TNHH 1 thành viên Luân</p>
        <address class="font-bold">Địa chỉ: Hạ Long - Quảng Ninh</address>
        <tel><span class="font-bold">SDT: 0868120192</span></tel>
        <p><span class="font-bold">Fax: 0868120192</span></p>
    </div>

    <div>
        <ul class="mt-10 space-y-2">
            <li>
                <a href="">Về chúng tôi</a>
            </li>

            <li>
                <a href="">Chính sách mua hàng</a>
            </li>

            <li>
                <a href="">Chính sách trả hàng</a>
            </li>
        </ul>
    </div>

    <div>
        <h5 class="mt-10 font-semibold">Mạng xã hội</h5>
        <div class="flex space-x-5 ">
            <a href="https://facebook.com">
                <i class="bi bi-facebook text-sm"></i>
            </a>
            <a href="https://facebook.com">
                <i class="bi bi-google text-sm"></i>
            </a>
            <a href="https://facebook.com">
                <i class="bi bi-instagram text-sm"></i>
            </a>
        </div>
    </div>
</footer>

<script type="text/javascript">
    axios({
        method: 'get',
        url: `http://localhost/api/cart/items`
    }).then((resp) => {
        const cart = resp.data.cart;
        document.querySelector('.cart-item-counter').innerHTML = cart.length;
    }).catch((error) => {
    });
</script>
</body>
</html>

```
<div id="execution-results-GETcategory--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETcategory--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETcategory--id-"></code></pre>
</div>
<div id="execution-error-GETcategory--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcategory--id-"></code></pre>
</div>
<form id="form-GETcategory--id-" data-method="GET" data-path="category/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETcategory--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETcategory--id-" onclick="tryItOut('GETcategory--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETcategory--id-" onclick="cancelTryOut('GETcategory--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETcategory--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>category/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETcategory--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## cart




> Example request:

```bash
curl -X GET \
    -G "http://localhost/cart" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/cart"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"  content="    Giỏ hàng
">
    <meta name="keywords" content="    Giỏ ahngf
">
    <title>
        Home Page    </title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!--AXIOS GỌI API-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
<nav class="flex justify-between items-center shadow p-5">
    <div>
        <img src="https://thumbs.dreamstime.com/b/web-183282388.jpg" alt="logo" class="w-12">
    </div>

    <div class="flex space-x-2 uppercase font-semibold items-center">
        <div><a href="">Home</a></div>
        <div><a href="">Danh mục</a></div>
        <div><a href="">Đăng ký</a></div>
        <div><a href="">Đăng nhập</a></div>

        <div class="relative">
            <div>
                <i class="bi bi-cart2 text-3xl"></i>
            </div>

            <div class="bg-red-400 text-white -top-2 -right-2 absolute rounded-full text-sm w-6 h-6 flex items-center justify-center cart-item-counter">0</div>
        </div>
    </div>
</nav>
<div class="container mx-auto md:px-0 px-5">
        <h4 class="block text-center text-2xl font-bold mt-2">Giỏ hàng</h4>
    <table class="table-fixed w-full border p-4 cart-info">
        <tr class="p-2">
            <th class="p-2">Sản phẩm</th>
            <th class="p-2">Số lượng</th>
            <th class="p-2">Giá/1 đv</th>
            <th class="p-2">Tổng giá</th>
        </tr>

    </table>

    <script>
        axios({
            method: 'get',
            url: `http://localhost/api/cart/items`
        }).then((resp) => {
            const cart = resp.data.cart;
            const cartInfoTable = document.querySelector('.cart-info');
            console.log(cartInfoTable);
            for (let i = 0; i < cart.length; i++) {
                const product = cart[i].product;
                const tr = document.createElement('tr');
                tr.classList.add('text-center');
                tr.innerHTML = `<td class="p-2">
                 <img src=""/>
                 <span class="font-bold">
                       ${product.name}
                 </span>
             </td>
             <td class="p-2">
                 <span class="bi bi-plus cursor-pointer" onclick="updateQuantity(1,${product.id},${product.price},event)"></span>
                 <input
                     type="text" readonly="" class="quantity border rounded w-12 text-center font-medium"
                     value="${cart[i].quantity}">
                 <span onclick="updateQuantity(-1,${product.id},${product.price},event)" class="bi bi-dash cursor-pointer"></span>
             </td>
             <td class="font-bold text-red-500 p-2">
                ${product.price}
             </td>

             <td class="font-bold text-red-500 p-2 total-item-price">
               ${product.price * cart[i].quantity}
             </td>`;
                cartInfoTable.appendChild(tr);
            }
        }).catch((error) => {

        });


        async function updateQuantity(quantity, id, price, event) {
            let inputQuantity = parseInt(event.target.parentNode.querySelector('.quantity').value);
            if (quantity == 1) {
                inputQuantity += parseInt(quantity);
            } else if (quantity == -1) {
                if (inputQuantity >= 2) {
                    inputQuantity += parseInt(quantity);
                }
            }
            event.target.parentNode.querySelector('.quantity').value = inputQuantity;
            //gửi request lên server để update lại số lượng sp trong giỏ hàng
            try {
                const resp = await axios({
                    method: 'put',
                    url: `/api/cart/items/${id.id}/${quantity}`
                });
            } catch (e) {

            }


            const newPrice = inputQuantity * price;
            event.target.parentNode.parentNode.querySelector('.total-item-price').innerHTML = newPrice;
        }
    </script>
</div>

<footer class="flex md:flex-row flex-col justify-around mt-20 bg-gray-200 py-5">
    <div>
        <img src="https://thumbs.dreamstime.com/b/web-183282388.jpg" alt="logo" class="w-12">
        <p class="font-bold mt-5">Công ty TNHH 1 thành viên Luân</p>
        <address class="font-bold">Địa chỉ: Hạ Long - Quảng Ninh</address>
        <tel><span class="font-bold">SDT: 0868120192</span></tel>
        <p><span class="font-bold">Fax: 0868120192</span></p>
    </div>

    <div>
        <ul class="mt-10 space-y-2">
            <li>
                <a href="">Về chúng tôi</a>
            </li>

            <li>
                <a href="">Chính sách mua hàng</a>
            </li>

            <li>
                <a href="">Chính sách trả hàng</a>
            </li>
        </ul>
    </div>

    <div>
        <h5 class="mt-10 font-semibold">Mạng xã hội</h5>
        <div class="flex space-x-5 ">
            <a href="https://facebook.com">
                <i class="bi bi-facebook text-sm"></i>
            </a>
            <a href="https://facebook.com">
                <i class="bi bi-google text-sm"></i>
            </a>
            <a href="https://facebook.com">
                <i class="bi bi-instagram text-sm"></i>
            </a>
        </div>
    </div>
</footer>

<script type="text/javascript">
    axios({
        method: 'get',
        url: `http://localhost/api/cart/items`
    }).then((resp) => {
        const cart = resp.data.cart;
        document.querySelector('.cart-item-counter').innerHTML = cart.length;
    }).catch((error) => {
    });
</script>
</body>
</html>

```
<div id="execution-results-GETcart" hidden>
    <blockquote>Received response<span id="execution-response-status-GETcart"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETcart"></code></pre>
</div>
<div id="execution-error-GETcart" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcart"></code></pre>
</div>
<form id="form-GETcart" data-method="GET" data-path="cart" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETcart', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETcart" onclick="tryItOut('GETcart');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETcart" onclick="cancelTryOut('GETcart');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETcart" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>cart</code></b>
</p>
</form>



