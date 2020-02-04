<form method="post" action="{{ route('result') }}">
    <table>
        <tr>
            <td width="50%"><strong style="font-size: 24px;">RESULT SHEET</strong></td>
        </tr>

        <tr>
            <td>Select Category</td>
            <td>
                <select type="select" name="result">
                    <option value="gnm">List of General (Male)</option>
                    <option value="gnf">List of General (Female)</option>
                    <option value="obcm">List of OBC (Male)</option>
                    <option value="obcf">List of OBC (Female)</option>
                    <option value="stm">List of ST/SC (Male)</option>
                    <option value="stf">List of ST/SC (Female)</option>
                </select>
            </td>
        </tr>
        <tr><p>
            <td><button type="submit">Submit</button> </td>
        </tr>
    </table>
    {{ csrf_field() }}
</form>