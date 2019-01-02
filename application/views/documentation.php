
<html>
<head>
    <title>REST SMS Gateway</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        body {
            font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif;
        }

        div.title span:first-child {
            font-size: 48px;
            letter-spacing: 3px;
            font-weight: bold;
        }

        h1 {
            font-size: 24px;
        }

        h2 {
            font-size: 16px;
        }

        div.resource {
            padding: 14px 10px 10px 10px;
            border: 1px solid grey;
            background-color: #e6e6e6;
            margin-bottom: 10px;
        }

        div.location {
            font-size: 18px;
            margin-bottom: 10px;
        }

        div.location span:first-child {
            white-space: nowrap;
            padding: 5px 12px 5px 12px;
            margin-right: 5px;
            background-color: orange;
            font-weight: bold;
        }

        div.location span:nth-child(2) {
            font-family: 'DejaVu Sans Mono', monospace;
        }

        div.resource p {
            margin: 6px 0 6px;
        }

        div.resource table {
            padding: 7px 5px 5px 5px;
            border: 1px solid grey;
            background-color: #e6e6e6;
            margin-bottom: 10px;
        }

        div.resource table tbody tr.header1 td {
            background-color: #a6a6a6;
            border: solid 1px grey;
            font-weight: bold;
        }

        div.resource table tbody tr.header2 td {
            font-size: 80%;
            background-color: #a6a6a6;
            font-weight: bold;
        }

        div.examples {
            padding: 7px 5px 5px 5px;
            border: 1px solid grey;
            background-color: #e6e6e6;
        }

        div.examples div {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="title"><span>REST SMS Gateway</span></div>
<h1> FIRST U NEED TO INSTALL THIS APP (LINK BELLOW) ON YOUR ANDROID DEVICE AND RUN ON YOUR DEVICE</h1>
<p>LINK : <a href="https://play.google.com/store/apps/details?id=com.perfness.smsgateway.rest">https://play.google.com/store/apps/details?id=com.perfness.smsgateway.rest</a> </p>

<h1>Introduction</h1>

<p>
    <i>REST SMS Gateway</i> allows to change your phone into a powerful SMS Gateway which you can control from a computer.
</p>

<p>
    To browse existing messages or send a now one you need to use special commands.
    For this purpose we decided to use a well know REST approach.
    If you know REST you can go to section <a href="#api">REST API</a> and start your adventure.
    On the other hand, if you haven't heard of REST, we recommend to read one of many tutorials available online first.
</p>

<p>
    To make your work easier we prepared a library written in Python and two exemplary scripts which uses this library (see section <a href="#examples">Usage examples</a>).
    The first example shows how to runs all functions, while
    the second sends messages from a file.
</p>

<p>
    All commands are sent to an address showed by the app (after pressing button <i>Start</i>).
    The IP address varies whether you are connected to WiFi (e.g. http://192.168.1.101:8080/) or not (http://127.0.0.1:8080/).
    The port is always 8080.
</p>

<a name="api"><h1>REST API</h1></a>

<p>
    This section presents supported commands and explains how to use them.
    All <code>GET</code> commands can be entered into your web browser,
    to run <code>PUT</code> command one need to use <code>curl</code> (a command line tool) or write an application to query the server.
</p>

<div class="resource">
    <div class="location"><span>GET</span><span><a name="api-get-thread-all">/v1/thread/</a></span></div>
    <p>List threads (also know as conversations) available in the mobile phone. The list starts with the recently updated threads.</p>
    <table>
        <tbody>
            <tr class="header1"><td colspan="5">Queries</td></tr>
            <tr class="header2"><td>Name</td><td>Type</td><td>Usage</td><td>Default</td><td>Description</td></tr>
            <tr><td><code>limit</code></td><td><code>int</code></td><td><i>Optional</i></td><td><code>10</code></td><td width="100%"><p>Number of threads to list</p></td></tr>
            <tr><td><code>offset</code></td><td><code>int</code></td><td><i>Optional</i></td></td><td><code>0</code></td><td width="100%"><p>Number of threads to skip</p></td></tr>
        </tbody>
    </table>
    <div class="examples">
        <div>Example(s):</div>

        <ul>
            <li><a href="/v1/thread/">/v1/thread/</a></li>
            <li><code>curl -X "GET" "http://192.168.1.101:8080/v1/thread/"</code></li>
            <li><code>curl -X "GET" "http://192.168.1.102:8080/v1/thread/?offset=4&limit=20"</code></li>
        </ul>
    </div>
</div>

<div class="resource">
    <div class="location"><span>GET</span><span><a name="api-get-thread-id">/v1/thread/&lt;thread_id&gt;/</a></span></div>
    <p>View messages in a thread with a given <code>thread_id</code>. To get <code>thread_id</code> run <a href="#api-get-thread-all">/v1/thread/</a></code>.</p>
    <table>
        <tbody>
            <tr class="header1"><td colspan="5">Segments</td></tr>
            <tr class="header2"><td>Name</td><td>Type</td><td colspan="3">Description</td></tr>
            <tr><td><code>thread_id</code></td><td><code>int</code></td><td colspan="3" width="100%"><p>Thread to present</p></td></tr>
            <tr class="header1"><td colspan="5">Queries</td></tr>
            <tr class="header2"><td>Name</td><td>Type</td><td>Usage</td><td>Default</td><td>Description</td></tr>
            <tr><td><code>limit</code></td><td><code>int</code></td><td><i>Optional</i></td><td><code>10</code></td><td width="100%"><p>Number of messages to list</p></td></tr>
            <tr><td><code>offset</code></td><td><code>int</code></td><td><i>Optional</i></td></td><td><code>0</code></td><td width="100%"><p>Number of messages to skip</p></td></tr>
        </tbody>
    </table>
    <div class="examples">
        <div>Example(s):</div>

        <ul>
            <li><a href="/v1/thread/1/">/v1/thread/1/</a> (result will vary between phones)</li>
            <li><code>curl -X "GET" "http://192.168.1.101:8080/v1/thread/12/"</code></li>
        </ul>
    </div>
</div>

<div class="resource">
    <div class="location"><span>GET</span><span><a name="api-get-sms-all">/v1/sms/</a></span></div>
    <p>List SMS. The list starts with the newest messages.</p>
    <table>
        <tbody>
            <tr class="header1"><td colspan="5">Queries</td></tr>
            <tr class="header2"><td>Name</td><td>Type</td><td>Usage</td><td>Default</td><td>Description</td></tr>
            <tr><td><code>limit</code></td><td><code>int</code></td><td><i>Optional</i></td><td><code>10</code></td><td width="100%"><p>Number of messages to list</p></td></tr>
            <tr><td><code>offset</code></td><td><code>int</code></td><td><i>Optional</i></td></td><td><code>0</code></td><td width="100%"><p>Number of messages to skip</p></td></tr>
        </tbody>
    </table>
    <div class="examples">
        <div>Example(s):</div>

        <ul>
            <li><a href="/v1/sms/">/v1/sms/</a></li>
            <li><code>curl -X "GET" "http://192.168.1.101:8080/v1/sms/"</code></li>
        </ul>
    </div>
</div>

<div class="resource">
    <div class="location"><span>PUT</span><span><a name="api-put-sms">/v1/sms/</a></span></div>
    <div class="location"><span>POST</span><span><a name="api-post-sms">/v1/sms/</a></span></div>
    <div class="location"><span>GET</span><span><a name="api-put-sms">/v1/sms/send/</a></span></div>
    <p>Send SMS. Text from field <code>message</code> is sent to phone with a number from field <code>phone</code>.</p>
    <p>Remember that you may be charged for each SMS that you send. Please, use this option wisely.</p>
    <table>
        <tbody>
            <tr class="header1"><td colspan="5">Queries</td></tr>
            <tr class="header2"><td>Name</td><td>Type</td><td>Usage</td><td>Default</td><td>Description</td></tr>
            <tr><td><code>phone</code></td><td><code>string</code></td><td><i>Required</i></td><td></td><td width="100%"><p>Phone number</p></td></tr>
            <tr><td><code>message</code></td><td><code>string</code></td><td><i>Required</i></td><td></td><td width="100%"><p>Message to send</p></td></tr>
            <tr><td><code>sim_slot</code></td><td><code>number</code></td><td><i>Optional</i></td><td></td><td width="100%"><p>Sim slot (sim card) to be used (counting from <code>0</code>, see <a href="#api-get-status-all">/v1/device/status/</a></code>). If <code>sim_slot</code> is incorrect then a default sim card is used.</p></td></tr>
        </tbody>
    </table>
    <div class="examples">
        <div>Example(s):</div>

        <ul>
            <li><code>curl -X "PUT" "http://192.168.1.102:8080/v1/sms/?phone=987654321&message=your%20message"</code></li>
            <li><code>curl -X "PUT" "http://192.168.1.102:8080/v1/sms/?phone=987654321&message=your%20message&sim_slot=0"</code></li>
            <li><code>curl -X "POST" "http://192.168.1.102:8080/v1/sms/?phone=987654321&message=your%20message"</code></li>
            <li><code>curl -X "POST" "http://192.168.1.102:8080/v1/sms/" -d "phone=987654321" -d "message=your message"</code>&nbsp;<i>(works only with POST method)</i></li>
            <li><code>curl -X "GET" "http://192.168.1.102:8080/v1/sms/send/?phone=987654321&message=your%20message"</code><i>
        </ul>
    </div>
</div>

<div class="resource">
    <div class="location"><span>GET</span><span><a name="api-get-sms-id">/v1/sms/&lt;sms_id&gt;/</a></span></div>
    <p>View SMS with a given <code>sms_id</code>. To get <code>sms_id</code> run <a href="#api-get-sms-all">/v1/sms/</a></code> or <a href="#api-get-thread-id">/v1/thread/&lt;thread_id&gt;/</a></code>.</p>
    <table>
        <tbody>
            <tr class="header1"><td colspan="5">Segments</td></tr>
            <tr class="header2"><td>Name</td><td>Type</td><td colspan="3">Description</td></tr>
            <tr><td><code>sms_id</code></td><td><code>int</code></td><td colspan="3" width="100%"><p>SMS to view</p></td></tr>
        </tbody>
    </table>
    <div class="examples">
        <div>Example(s):</div>

        <ul>
            <li><a href="/v1/sms/1/">/v1/sms/1/</a> (result will vary between phones)</li>
            <li><code>curl -X "GET" "http://192.168.1.101:8080/v1/sms/45/"</code></li>
        </ul>
    </div>
</div>

<div class="resource">
    <div class="location"><span>GET</span><span><a name="api-get-status-all">/v1/device/status/</a></span></div>
    <p>Present basic details about the phone.</p>
    <table>
        <tbody>
        <tr class="header1"><td colspan="5">Response</td></tr>
        <tr class="header2"><td>Name</td><td>Parent</td><td>Type</td><td colspan="2">Description</td></tr>
        <tr><td><code>timestamp</code></td><td></td><td><code>long</code></td><td colspan="2" width="100%"><p>Current time in miliseconds</p></td></tr>
        <tr><td><code><i>telephony</i></code></td><td></td><td><code>object</code></td><td colspan="2" width="100%"><p>Details about default connection</p></td></tr>
        <tr><td><code>is_network_roaming</code></td><td><code><i>telephony</i></code></td><td><code>boolean</code></td><td colspan="2" width="100%"><p>Is roaming present (<code>true</code>) or not (<code>false</code>)</p></td></tr>
        <tr><td><code>network_operator_name</code></td><td><code><i>telephony</i></code></td><td><code>string</code></td><td colspan="2" width="100%"><p>Network operator name</p></td></tr>
        <tr><td><code>sim_state</code></td><td><code><i>telephony</i></code></td><td><code>string</code></td><td colspan="2" width="100%"><p>SIM state (supported values: <code>ready</code>, <code>absent</code>, <code>unknown</code>, <code>pin required</code>, <code>puk required</code>, <code>network locked</code>)</p></td></tr>
        <tr><td><code><i>telephonies</i></code></td><td></td><td><code>object</code></td><td colspan="2" width="100%"><p>Dual sim details (if available, requires OS v. 5.1)</p></td></tr>
        <tr><td><code>display_name</code></td><td><code><i>telephonies</i></code></td><td><code>string</code></td><td colspan="2" width="100%"><p>Carrier name set by user</p></td></tr>
        <tr><td><code>carrier_name</code></td><td><code><i>telephonies</i></code></td><td><code>string</code></td><td colspan="2" width="100%"><p>Carrier name</p></td></tr>
        <tr><td><code>sim_slot</code></td><td><code><i>telephonies</i></code></td><td><code>number</code></td><td colspan="2" width="100%"><p>Sim slot number</p></td></tr>
        <tr><td><code>sim_state</code></td><td><code><i>telephonies</i></code></td><td><code>string</code></td><td colspan="2" width="100%"><p>SIM state (supported values: <code>ready</code>, <code>absent</code>, <code>unknown</code>, <code>pin required</code>, <code>puk required</code>, <code>network locked</code>) (if available, requires OS v. 7.0)</p></td></tr>
        <tr><td><code>is_network_roaming</code></td><td><code><i>telephonies</i></code></td><td><code>string</code></td><td colspan="2" width="100%"><p>Is roaming present (<code>true</code>) or not (<code>false</code>) (if available, requires OS v. 7.0)</p></td></tr>
        <tr><td><code>network_operator_name</code></td><td><code><i>telephonies</i></code></td><td><code>string</code></td><td colspan="2" width="100%"><p>Network operator name (if available, requires OS v. 7.0)</p></td></tr>
        <tr><td><code><i>battery</i></code></td><td></td><td><code>object</code></td><td colspan="2" width="100%"><p>Details about battery</p></td></tr>
        <tr><td><code>status</code></td><td><code><i>battery</i></code></td><td><code>string</code></td><td colspan="2" width="100%"><p>Power status (supported values: <code>charging</code>, <code>full</code>, <code>discharging</code>, <code>not charging</code>, <code>unknown</code>)</p></td></tr>
        <tr><td><code>level</code></td><td><code><i>battery</i></code></td><td><code>float</code></td><td colspan="2" width="100%"><p>Battery level</p></td></tr>
        </tbody>
    </table>
    <div class="examples">
        <div>Example(s):</div>

        <ul>
            <li><a href="/v1/device/status/">/v1/device/status/</a>  (result will vary between phones)</li>
            <li><code>curl -X "GET" "http://192.168.1.101:8080/v1/device/status/"</code></li>
        </ul>
    </div>
</div>

<a name="examples"><h1>Usage examples</h1></a>

<h2>Python</h2>

<p>
    <a href="/static/rsgv1.py">rsgv1.py - Library</a><br>
    <a href="/static/example-exemplary_usage.py">example-exemplary_usage.py - Usage example</a><br>
    <a href="/static/example-send_from_file.py">example-send_from_file.py - Send multiple messages from input file</a><br>
    <a href="/static/example-send_from_file.psv">example-send_from_file.psv - Example of input file</a><br>
</p>

<h2>Bash</h2>

<p>
    <a href="/static/rsgv1.sh">rsgv1.sh - Usage example</a><br>
</p>

</body>
</html>
