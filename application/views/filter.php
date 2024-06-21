<style>
    .date-selection-wrapper {
        width: 100%;
        position: relative;
        line-height: 1.2;
    }

    .date-selection-wrapper .date-selection {
        width: 100%;
        outline: none;
        box-shadow: inset 3px 3px 6px var(--primary-200), inset -3px -3px 3px #fff;
        color: #071e54;
        opacity: 0.8;
        border-radius: 59px !important;
        border: 1px solid var(--primary-200);
        height: 33px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        cursor: pointer;
    }

    .date-selection-wrapper .DSDW {
        display: none;
        position: absolute;
        background: white;
        z-index: 9;
        border: 1px solid #eee;
        border-radius: 10px;
        margin-top: 7px;
        right: 0;
        width: 270px;
    }

    .date-selection-wrapper .DSDW.active {
        display: block
    }

    .date-selection-wrapper .DSDW .DSDW-header {
        padding: 5px 10px;
    }

    .date-selection-wrapper .DSDW .DSDW-header .date-fy-selection {
        background: transparent;
        border: 1px solid var(--darklight-200);
        padding: 4px 10px;
        width: 100%;
        border-radius: 6px;
        font-size: 12px;
    }

    .date-selection-wrapper .DSDW .DSDW-body {
        padding: 15px;
        border-top: 1px solid var(--darklight-200);
        border-bottom: 1px solid var(--darklight-200);
    }

    .date-selection-wrapper .DSDW .DSDW-footer {
        padding: 5px 10px;
    }

    .DSDW-footer button {
        font-size: 12px;
        border: none;
        padding: 5px;
        background: var(--primary-600);
        color: var(--darklight-100);
    }



    .date-selection-wrapper .DSDW .month-box-wrapper {
        list-style: none;
        display: flex;
        gap: 5px;
        flex-wrap: wrap;
        padding: 0;
        margin: 0;
    }

    .date-selection-wrapper .DSDW .month-box-wrapper .month-box {
        border-radius: 4px;
        padding: 5px;
        cursor: pointer;
        font-size: 11px;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        text-align: center;
        width: calc((100% / 6) - 5px);
        border: 1px solid white;
    }

    .date-selection-wrapper .DSDW .month-box-wrapper .month-box.active {
        border: 1px solid var(--primary-600);
        color: var(--darklight-100);
        background: var(--primary-600);
    }

    .date-selection-month {
        width: 100%;
        text-align: left;
        padding: 0 15px;
        line-height: 32px;
        font-size: 14px;
        color: var(--darklight-600);
    }

    .date-selection-year {
        width: 80px;
        border-left: 1px solid var(--primary-200);
        text-align: center;
        padding: 0 10px;
        line-height: 32px;
        font-size: 14px;
        background: var(--primary-600);
        color: var(--white-100);
    }

    .filter-group-border {
        border: 1px solid var(--primary-200);
    }
</style>

<div class="filter-container shadow-sm bg-darklight-100">
    <div class="container-fluid py-2">
        <div class="row" style="gap: 9px 0; ">
            <div class="form-group col">
                <label for="" class="fs-14">Injection state</label>
                <select id="injection-state" class="form-select form-select-sm filter-group-border" aria-label="Default select example">
                    <option value="7" default>Gujarat</option>
                    <option value="4">Maharashtra</option>
                    <option value="5">Rajasthan</option>
                    <option value="6">Karnataka</option>
                    <option value="8">Tamil Nadu</option>
                    <option value="9">Chhattisgarh</option>
                    <option value="10">Uttar Pradesh</option>
                    <option value="11">Madhya Pradesh</option>
                    <option value="12">Andhra Pradesh</option>
                    <option value="13">Kerala</option>
                    <option value="14">Punjab</option>
                    <option value="15">Haryana</option>
                    <option value="16">Odisha</option>
                    <option value="17">Jharkhand</option>
                    <option value="18">West Bengal</option>
                </select>
            </div>
            <div class="form-group col">
                <label for="" class="fs-14">Drawal State</label>
                <select id="drawal-state" class="form-select form-select-sm filter-group-border" aria-label="Default select example">
                <option value="4">Maharashtra</option><option value="5">Rajasthan</option><option value="6">Karnataka</option><option value="7">Gujarat</option><option value="8">Tamil Nadu</option><option value="9">Chhattisgarh</option><option value="10">Uttar Pradesh</option><option value="11">Madhya Pradesh</option><option value="12">Andhra Pradesh</option><option value="13">Kerala</option><option value="14">Punjab</option><option value="15">Haryana</option><option value="16">Odisha</option><option value="17">Jharkhand</option><option value="18">West Bengal</option>
                </select>
            </div>

            <div class="form-group col">
                <label for="" class="fs-14">Drawal Voltage</label>
                <select id="drawal-voltage" class="form-select form-select-sm form-select-sm filter-group-border" aria-label="Default select example">
                <option value="23">11 KV</option><option value="24">22 KV</option><option value="25">33 KV</option><option value="26">66 KV</option><option value="27">110 KV</option><option value="28">132 KV</option><option value="29">220 KV</option><option value="30">230 KV</option>
                </select>
            </div>

            <div class="form-group col">
                <label for="" class="fs-14">Consumer Type</label>
                <select class="form-select form-select-sm filter-group-border" aria-label="Default select example">
                    <option value="1" selected>Industrial</option>
                    <option value="2">Discom</option>
                </select>
            </div>

            <div class="form-group col">
                <label for="" class="fs-14">OA Mode</label>
                <select id="oaMode" class="form-select form-select-sm filter-group-border" aria-label="Default select example">
                    <option value="1" selected>Capative</option>
                    <option value="2">Capative</option>
                    <option value="3">group Capative</option>
                </select>
            </div>

            <div class="form-group col">
                <label for="" class="fs-14">OA Application</label>
                <select id="oaApplication" class="form-select form-select-sm filter-group-border" aria-label="Default select example">
                    <option value="1" selected>MTOA/LTOA</option>
                    <option value="2">MTOA</option>
                    <option value="3">LTOA</option>
                </select>
            </div>

            <div class="form-group col">
                <label for="" class="fs-14">Date range</label>
                <input type="date" class="form-control form-control-sm filter-group-border">
            </div>


        </div>
    </div>
</div>