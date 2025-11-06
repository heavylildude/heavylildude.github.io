<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Sheet as DB (The Gnarly Way)</title>
    <style>
        body { 
            background: #222; 
            color: #0f0; 
            font-family: 'Courier New', Courier, monospace; 
            padding: 1em;
        }
        pre { 
            background: #333; 
            padding: 1em; 
            border-radius: 5px; 
            white-space: pre-wrap; 
            word-break: break-all;
        }
    </style>
</head>
<body>

    <h1>Check the Console, Brah! (And here, I guess...)</h1>
    <pre id="output">Loading data from the matrix...</pre>

    <script>
        // --- CONFIG ---
        // Your specific sheet info, locked and loaded
        const SHEET_ID = '1_Eb5Vu48WsYYB9KxhhRM7BGf_d2blgmBDDM6TNby-RA';
        const TAB_ID = '0';
        // --- END CONFIG ---

        const dataUrl = `https://docs.google.com/spreadsheets/d/${SHEET_ID}/gviz/tq?tqx=out:json&gid=${TAB_ID}`;

        /**
         * Cleans the bogus JSONP wrapper from Google's response.
         * @param {string} text - The raw text response from the fetch.
         * @returns {object} - The parsed JSON object.
         */
        function cleanGoogleJsonResponse(text) {
            const jsonMatch = text.match(/google\.visualization\.Query\.setResponse\((.*)\)/s);
            if (!jsonMatch || !jsonMatch[1]) {
                throw new Error("D'oh! Couldn't parse the Google JSONP response.");
            }
            return JSON.parse(jsonMatch[1]);
        }

        /**
         * Formats the cooked Google Viz data into a nice, clean array of objects.
         * @param {object} gvizData - The parsed JSON data from cleanGoogleJsonResponse.
         * @returns {Array<object>} - A clean array, like [ { id: 1, name: 'Brah' }, ... ]
         */
        function formatGvizData(gvizData) {
            const dataTable = gvizData.table;
            const headers = dataTable.cols.map(col => col.label);
            const rows = dataTable.rows.map(row => {
                const rowData = {};
                row.c.forEach((cell, index) => {
                    const header = headers[index];
                    const value = cell ? cell.v : null; 
                    rowData[header] = value;
                });
                return rowData;
            });
            return rows;
        }

        /**
         * Main function to fetch and display the data
         */
        async function loadData() {
            console.log('Fetching data, mate...');
            const outputEl = document.getElementById('output');

            try {
                const response = await fetch(dataUrl);
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                
                const text = await response.text();
                const jsonData = cleanGoogleJsonResponse(text);
                const formattedData = formatGvizData(jsonData);
                
                // Hell yeah, success!
                console.log('--- Bitchin\' Formatted Data ---');
                console.log(formattedData);

                outputEl.textContent = JSON.stringify(formattedData, null, 2);

            } catch (error) {
                console.error('Totally cooked it, brah:', error);
                outputEl.textContent = `Totally cooked it: ${error.message}`;
            }
        }

        // Run the hack!
        loadData();

    </script>
</body>
</html>
