<h3>Tasks by Priority</h3>
<table class="table">
    <tr>
        <th>Id</th>
        <th></th>
        <th>Task</th>
        <th>Priority</th>
    </tr>
    {display_tasks}
    <tr>
        <td>{id}</td>
        <td><input type='checkbox' name='task{id}'/></td>
        <td>{name}</td>
        <td>{priority}</td>
    </tr>
    {/display_tasks}    
</table>
<form method='POST' action='{completer}'>
    <input type='submit' value='Complete checked tasks'/>
</form>