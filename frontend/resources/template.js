/** //* It'll be called to fill a .html with contents from a database, or something like that.
 * @param {string} target_id - //* valid values: _left-top-content, _middle-content, _right-bottom-content
 * @param {string} top_span 
 * @param {string} image_src - //* href or http image url
 * @param {string} bottom_span
 * @param {string} location - //* valid values: beforebegin, afterbegin, beforeend, afterend
 */
 function insert_div(target_id , top_span, image_src, bottom_span, location) {
    var content = 
`
<hr>
    <div>
        <div id=""
            class="text-wrap
                text-break">
            <span>` + top_span + `</span>
        </div>
        <div id=""
            class="">
            <img id="_logo"
                src="` + image_src + `"
                alt="..." />
        </div>
        <div id=""
            class="text-wrap
                text-break">
            <span>` + bottom_span + `</span>
        </div>
    </div>
<hr>
`;
    document.getElementById(target_id).insertAdjacentHTML(location, content);
}