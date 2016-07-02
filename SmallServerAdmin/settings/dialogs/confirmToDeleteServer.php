<div id="confirmToDeleteServer" class="modal" role="dialog" data-not-restore="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>${Confirm}</h3>
			</div>
			<div class="modal-body">
				${Are you sure you want to delete the}
				<span ng-show="SelectedServerToDelete.Name"><strong>{{SelectedServerToDelete.Name}}</strong> (<em>{{SelectedServerToDelete.Address}}</em>).</span>
				<span ng-show="!SelectedServerToDelete.Name"><strong>{{SelectedServerToDelete.Address}}</strong>.</span>
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger pull-left" ng-click="DeleteServer()">${Delete}</button>
				<button class="btn btn-default pull-left" data-dismiss="modal" aria-hidden="true">${Cancel}</button>
			</div>
		</div>
	</div>
</div>